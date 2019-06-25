<?php

namespace App\Controllers\Posts\Products;


class Rose extends Product {
	public function __construct() {
		$this->add_args(
			[
				'tax_query'      => [
					[
						'taxonomy' => 'product_cat',
						'field'    => 'slug',
						'terms'    => 'rose',
					],
				],
			]
		);
	}
}
