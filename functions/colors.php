<?php

function sunflower_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Magenta', 'sunflower' ),
				'slug'  => 'magenta',
				'color' => '#e6007e',
			],
			[
				'name'  => esc_html__( 'Magenta 600', 'sunflower' ),
				'slug'  => 'magenta-600',
				'color' => '#BF0069',
			],
			[
				'name'  => esc_html__( 'Green', 'sunflower' ),
				'slug'  => 'green',
				'color' => '#46962b',
            ],
			[
				'name'  => esc_html__( 'Green 800b', 'sunflower' ),
				'slug'  => 'green-800b',
				'color' => '#224634',
            ],
			[
				'name'  => esc_html__( 'Green 550', 'sunflower' ),
				'slug'  => 'green-550',
				'color' => '#3C8025',
            ],
            [
				'name'  => esc_html__( 'White', 'sunflower' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			],
			[
				'name'  => esc_html__( 'Yellow 500', 'sunflower' ),
				'slug'  => 'yellow-500',
				'color' => '#ffd500',
            ],
			[
				'name'  => esc_html__( 'Yellow 600', 'sunflower' ),
				'slug'  => 'yellow-500',
				'color' => '#D9B500',
            ],
			[
				'name'  => esc_html__( 'Blue 500', 'sunflower' ),
				'slug'  => 'blue-500',
				'color' => '#4cb4e7',
            ],
			[
				'name'  => esc_html__( 'Blue 600', 'sunflower' ),
				'slug'  => 'blue-600',
				'color' => '#4097c2',
            ],
			[
				'name'  => esc_html__( 'Gray 100', 'sunflower' ),
				'slug'  => 'gray-100',
				'color' => '#EFF2ED',
            ],
			[
				'name'  => esc_html__( 'Black 500', 'sunflower' ),
				'slug'  => 'black-500',
				'color' => '#363636',
            ]

		]
	);
}
add_action( 'after_setup_theme', 'sunflower_add_custom_gutenberg_color_palette' );