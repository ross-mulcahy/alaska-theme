<?php
/**
 * Plugin Name: Alaska Demo Content
 * Description: Rerunnable WP-CLI demo seeding for the Alaska block theme.
 * Version: 1.0.0
 * Author: OpenAI
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render a pattern file from the active theme into raw block markup.
 *
 * @param string $pattern_file Pattern filename inside the theme patterns directory.
 * @return string
 */
function alaska_demo_render_pattern_file( $pattern_file ) {
	$path = trailingslashit( get_stylesheet_directory() ) . 'patterns/' . $pattern_file;

	if ( ! file_exists( $path ) ) {
		return '';
	}

	ob_start();
	include $path;
	return trim( (string) ob_get_clean() );
}

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	/**
	 * WP-CLI command for demo seeding.
	 */
	class Alaska_Demo_Content_Command {
		/**
		 * Seed or refresh demo pages and posts.
		 *
		 * ## OPTIONS
		 *
		 * [--overwrite]
		 * : Replace content for existing seeded pages and posts.
		 *
		 * ## EXAMPLES
		 *
		 *     wp alaska-demo seed
		 *     wp alaska-demo seed --overwrite
		 *
		 * @param array $args Positional args.
		 * @param array $assoc_args Assoc args.
		 */
		public function seed( $args, $assoc_args ) {
			$overwrite = \WP_CLI\Utils\get_flag_value( $assoc_args, 'overwrite', false );

			$pages = array(
				array(
					'title'   => 'Home',
					'slug'    => 'home',
					'content' => alaska_demo_render_pattern_file( 'starter-homepage-finance.php' ),
				),
				array(
					'title'   => 'Personal Banking',
					'slug'    => 'personal-banking',
					'content' => alaska_demo_render_pattern_file( 'starter-product-page-finance.php' ),
				),
				array(
					'title'   => 'Newsroom',
					'slug'    => 'newsroom',
					'content' => alaska_demo_render_pattern_file( 'starter-newsroom-finance.php' ),
				),
				array(
					'title'   => 'Contact',
					'slug'    => 'contact',
					'content' => alaska_demo_render_pattern_file( 'finance-support-contact.php' ) . "\n\n" . alaska_demo_render_pattern_file( 'finance-legal-disclosure.php' ),
				),
			);

			$seeded_pages = array();

			foreach ( $pages as $page ) {
				$seeded_pages[ $page['slug'] ] = $this->upsert_post(
					array(
						'post_type'    => 'page',
						'post_title'   => $page['title'],
						'post_name'    => $page['slug'],
						'post_status'  => 'publish',
						'post_content' => $page['content'],
					),
					$overwrite
				);
			}

			$categories = array(
				'Market Updates',
				'Security',
				'Community',
			);

			foreach ( $categories as $category_name ) {
				if ( ! term_exists( $category_name, 'category' ) ) {
					wp_insert_term( $category_name, 'category' );
				}
			}

			$posts = array(
				array(
					'title'    => 'How to make a finance demo site feel credible without overpromising',
					'slug'     => 'finance-demo-credibility',
					'category' => 'Market Updates',
					'content'  => $this->build_post_content(
						'Modern demo sites work best when the design is polished but the claims stay intentionally modest and reviewable.',
						'Use modular sections for rates, support, disclosures, and social proof so marketers can update details without asking engineering to change a template.',
						'When a rate, approval promise, or regulatory statement is important, pair it with a nearby disclosure instead of burying the detail in a footer.'
					),
				),
				array(
					'title'    => 'Security messaging checklist for financial landing pages',
					'slug'     => 'security-messaging-checklist',
					'category' => 'Security',
					'content'  => $this->build_post_content(
						'Security sections should focus on real support channels, account protections, and the next step a customer can take if they need help.',
						'This demo content intentionally leaves room for approved language around fraud support, authentication, coverage, and alerting.',
						'Replace placeholders with legal and compliance-approved language before launch.'
					),
				),
				array(
					'title'    => 'Why modular patterns improve editorial velocity',
					'slug'     => 'modular-patterns-editorial-velocity',
					'category' => 'Community',
					'content'  => $this->build_post_content(
						'Modular patterns let teams mix hero sections, product grids, FAQs, and support modules directly in page content.',
						'That means homepage and campaign pages can evolve inside the editor instead of becoming special-case templates.',
						'For large organizations, this also makes approvals easier because each content section is visible where it is published.'
					),
				),
			);

			foreach ( $posts as $post ) {
				$post_id = $this->upsert_post(
					array(
						'post_type'    => 'post',
						'post_title'   => $post['title'],
						'post_name'    => $post['slug'],
						'post_status'  => 'publish',
						'post_content' => $post['content'],
					),
					$overwrite
				);

				wp_set_post_terms( $post_id, array( $post['category'] ), 'category', false );
			}

			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $seeded_pages['home'] );
			update_option( 'page_for_posts', 0 );

			\WP_CLI::success( 'Demo pages and posts are ready. Pages can now be updated directly in the editor.' );
		}

		/**
		 * Insert or update a post by slug.
		 *
		 * @param array $post_data  Post data for wp_insert_post/wp_update_post.
		 * @param bool  $overwrite  Whether to replace existing content.
		 * @return int
		 */
		private function upsert_post( $post_data, $overwrite ) {
			$existing = get_page_by_path( $post_data['post_name'], OBJECT, $post_data['post_type'] );

			if ( $existing ) {
				if ( ! $overwrite && ! empty( $existing->post_content ) ) {
					return (int) $existing->ID;
				}

				$post_data['ID'] = (int) $existing->ID;
				return (int) wp_update_post( $post_data );
			}

			return (int) wp_insert_post( $post_data );
		}

		/**
		 * Build simple, valid block markup for demo posts.
		 *
		 * @param string ...$paragraphs Paragraph content.
		 * @return string
		 */
		private function build_post_content( ...$paragraphs ) {
			$markup = array();

			foreach ( $paragraphs as $paragraph ) {
				$markup[] = '<!-- wp:paragraph --><p>' . esc_html( $paragraph ) . '</p><!-- /wp:paragraph -->';
			}

			return implode( "\n\n", $markup );
		}
	}

	\WP_CLI::add_command( 'alaska-demo', 'Alaska_Demo_Content_Command' );
}
