<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'panel_contacts' => [
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '',
			],
			'email' => [
				'type'  => 'text',
				'label' => __( 'E-mail', '{domain}' ),
				'value' => '',
			],
			'time' => [
				'type'  => 'text',
				'label' => __( 'Время работы', '{domain}' ),
				'value' => '',
			],
			'address' => [
				'type'  => 'text',
				'label' => __( 'Адрес', '{domain}' ),
				'value' => '',
			],
			'address_map' => [
				'type' => 'addable-popup',
				'label' => __('Добавить адресс офиса', '{domain}'),
				'template' => '{{- text }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'text' => [
						'type'  => 'text',
						'label' => __( 'Название офиса', '{domain}' ),
						'value' => '',
					],
					'city' => [
						'type'  => 'text',
						'label' => __( 'Город для центрирования карты', '{domain}' ),
						'value' => '',
					],
					'address' => [
						'type'  => 'text',
						'label' => __( 'Адресс офиса', '{domain}' ),
						'value' => '',
					],
				],
			],
			'vk' => [
				'type'  => 'text',
				'label' => __( 'VK', '{domain}' ),
				'value' => '',
			],
			'facebook' => [
				'type'  => 'text',
				'label' => __( 'Facebook', '{domain}' ),
				'value' => '',
			],
			'instagram' => [
				'type'  => 'text',
				'label' => __( 'Instagram', '{domain}' ),
				'value' => '',
			],
			'google_plus' => [
				'type'  => 'text',
				'label' => __( 'Google +', '{domain}' ),
				'value' => '',
			],
			'youtube' => [
				'type'  => 'text',
				'label' => __( 'Youtube', '{domain}' ),
				'value' => '',
			],
			'twitter' => [
				'type'  => 'text',
				'label' => __( 'Twitter', '{domain}' ),
				'value' => '',
			],
		],
	],
	'panel_h' => [
		'title'   => __( 'Верхнее меню', '{domain}' ),
		'options' => [
			'text' => [
				'type'  => 'text',
				'label' => __( 'Меню1', '{domain}' ),
				'value' => 'Новостройки',
			],
			'href' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'text2' => [
				'type'  => 'text',
				'label' => __( 'Меню2', '{domain}' ),
				'value' => 'Городская недвижимость',
			],
			'href2' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'text3' => [
				'type'  => 'text',
				'label' => __( 'Меню3', '{domain}' ),
				'value' => 'Загородная недвижимость',
			],
			'href3' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'text4' => [
				'type'  => 'text',
				'label' => __( 'Меню4', '{domain}' ),
				'value' => 'Скидки на новостройки',
			],
			'href4' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
		],
	],
	'panel_l' => [
		'title'   => __( 'Боковое меню', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '',
			],
			'discount' => [
				'type'  => 'text',
				'label' => __( 'Текст кнопки', '{domain}' ),
				'value' => 'получить сКИдку',
			],
			'hrefd' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'order' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Заказать звонок',
			],
			'href_order' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'mortgage' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'href_mortgage' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'about' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'href_about' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'build' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'href_build' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'contacts' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'href_contacts' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
		],
	],
	'footer' => [
		'title'   => __( 'Футер', '{domain}' ),
		'options' => [
			'more' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'order' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => '',
			],
			'horder' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'new_build' => [
				'type' => 'addable-popup',
				'label' => __('Добавить информацию', '{domain}'),
				'template' => '{{- text }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'text' => [
						'type'  => 'text',
						'label' => __( 'Заголовок блока', '{domain}' ),
						'value' => '',
					],
					'new_build' => [
						'type' => 'addable-popup',
						'label' => __('Добавить информацию блока', '{domain}'),
						'template' => '{{- text }}',
						'size' => 'large', // small, medium, large
						'limit' => 0, // limit the number of popup`s that can be added
						'add-button-text' => __('добавить', '{domain}'),
						'sortable' => true,
						'popup-options' => [
							'text' => [
								'type'  => 'text',
								'label' => __( 'Текст', '{domain}' ),
								'value' => '',
							],
							'href' => [
									'type'  => 'text',
									'label' => __( 'Ссылка', '{domain}' ),
									'value' => '#',
							],
						],
					],
				],
			],
		],
	],
];


