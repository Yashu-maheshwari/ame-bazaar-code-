<?php
/**
 * AME Bazaar - WP-CLI Seeder Script to Deploy 10 Evergreen Pillars.
 * Run via: wp eval-file deploy_pillars.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pillars = array(
	array(
		'title' => "Men's Fashion & Sizing Guide",
		'slug'  => 'mens-fashion-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide provides precise measurement procedures and fabric specifications for men's apparel. It details chest, shoulder, and length metrics required for regular and slim fits, matches fabric weights (GSM) to Delhi's seasonal cycles, and outlines care instructions to prevent shrinkage in natural fibers.",
			'ame_key_takeaways'       => array(
				"Size Verification: Never rely solely on generic tags (M, L, XL). Verify physical measurements across the shoulder yoke, chest circumference, and sleeve length.",
				"Climate-Specific Fabrics: Use fabrics under 120 GSM (grams per square meter) for summer ventilation, and transition to heavier weaves (180+ GSM) during winter.",
				"Alteration Margins: Ensure all ethnic shirts and kurtas retain a minimum of 1.5 inches (approx. 4 cm) of internal seam margin to permit future adjustments."
			),
			'ame_associated_pillar'  => 'store',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Principal Fitting Coordinator',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "How do I know if a shirt collar fits correctly?",
					'a' => "You should be able to slide two fingers comfortably between the buttoned collar and your neck. If you cannot fit two fingers, the collar is too tight."
				),
				array(
					'q' => "What is the difference between inseam and rise?",
					'a' => "The rise determines where the trousers sit on your hips or waist. The inseam measures the length along the inner leg from the crotch to the ankle hem."
				),
				array(
					'q' => "My trousers drag on the ground. What break should I request?",
					'a' => "Ask for a 'medium break' or 'single break.' The trouser hem will rest lightly on your shoe laces, keeping the back edge clear of the ground."
				)
			)
		)
	),
	array(
		'title' => "Women's Fashion & Sizing Guide",
		'slug'  => 'womens-fashion-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide provides sizing and garment specifications for women's apparel. It addresses the fit coordinates of kurtis, salwar kameez suit sets, and cotton pants, linking seam margins to alteration capabilities. It details fabric options matching Delhi's climate, outlines chest/hip sizing grids, and lists laundering guidelines to prevent bleeding and shrinkage.",
			'ame_key_takeaways'       => array(
				"Verify Alteration Margins: Off-the-rack kurtis and suit sets should contain at least 1.5 to 2 inches of internal seam margin to permit custom fittings.",
				"Fabric Weight Mapping: Choose lightweight cotton and rayon blends (90–120 GSM) for summer airflow; select heavier materials (180+ GSM) for winter layering.",
				"Separation Laundering: Handloom cottons and bright kurtas bleed dye during early washes. Wash separately in cold water with pH-neutral soap to preserve colors."
			),
			'ame_associated_pillar'  => 'womens_wear',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Ethnic Fit Specialist',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "Why do my kurti side slits tear easily, and how can I prevent it?",
					'a' => "Slits tear when the garment is too tight across the hips. When you sit, stress concentrates at the top of the slit. Ensure a relaxed fit and ask for a double-stitch reinforcing block at the top of the slit."
				),
				array(
					'q' => "How do I wash a new indigo kurti without fading?",
					'a' => "Wash it separately in cold water with mild liquid soap. Avoid rubbing or soaking for long periods, and dry inside out in the shade."
				),
				array(
					'q' => "What is the correct length for straight pants?",
					'a' => "Straight pants should end just above the ankle bone. This prevents the hem from dragging and stays clean on dusty streets."
				)
			)
		)
	),
	array(
		'title' => "Kids' Clothing & Sizing Guide",
		'slug'  => 'kids-clothing-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide provides sizing and design specifications for infant, toddler, and youth apparel. It addresses fabric safety (combed cotton, non-irritant seams), provides size-by-height/age grids, and details laundry care to maintain hygiene. It highlights quality indicators like double-stitched seams and soft elastic waistbands.",
			'ame_key_takeaways'       => array(
				"Prioritize Soft Finishes: Choose combed cotton or organic cotton fibers to protect sensitive skin from rashes.",
				"Size by Height, Not Age: Children grow at different rates. Use actual height (cm) rather than age labels (e.g., 2T, 3T) to select sizes.",
				"Inspect Safety Features: Ensure all buttons and embellishments are securely attached, and zippers have protective chin guards."
			),
			'ame_associated_pillar'  => 'kids_wear',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Kids Fitting Advisor',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "How do I know if my child's pants are too tight?",
					'a' => "If the waistband leaves red marks on the skin after an hour of play, the elastic is too tight. Choose a larger size or adjust the elastic."
				),
				array(
					'q' => "What is the best fabric for children with skin allergies?",
					'a' => "Organic, undyed combed cotton is the most skin-friendly fabric because it contains no harsh chemical residues or scratchy synthetic fibers."
				),
				array(
					'q' => "How much shrinkage should I expect in pure cotton kids' clothes?",
					'a' => "Most raw cotton kids' clothes will shrink by about 3% to 5% after the first wash. We recommend buying one size larger to accommodate this."
				)
			)
		)
	),
	array(
		'title' => "Saree Selection & Draping Guide",
		'slug'  => 'saree-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines fabric specifications and finishing steps for sarees. It covers the characteristics of Banarasi silk, georgette, and cotton weaves, details blouse tailoring adjustments (shoulder-drop prevention, side margins), and explains fall and pico application. It also provides storage instructions to prevent silk degradation.",
			'ame_key_takeaways'       => array(
				"Check Finishing Requirements: A raw saree requires fall and pico finishes to protect the edges and ensure proper drape weight.",
				"Blouse Fitting Margins: Tailored blouses should include at least 1.5 inches of internal side-seam margin to allow for future adjustments.",
				"Store Silk Safely: Fold heavy silk sarees inside out and wrap them in dry cotton bags to protect them from moisture and dust."
			),
			'ame_associated_pillar'  => 'sarees',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Saree Styling Expert',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "What is a saree fall, and why is it necessary?",
					'a' => "A fall is a 3-meter strip of cotton fabric sewn onto the inner bottom hem of a saree. It provides weight to create clean, structured pleats and protects the hem from wear and tear."
				),
				array(
					'q' => "Why does my blouse shoulder keep slipping down?",
					'a' => "This is typically caused by a loose bust line or shoulder straps that are too wide. Adding internal shoulder snaps that hook onto your bra straps prevents them from slipping."
				),
				array(
					'q' => "How do I store heavy silk sarees to prevent the metal threads from tarnishing?",
					'a' => "Store silk sarees inside out in soft cotton bags. Change the folds every three to four months to prevent creasing and fiber breakage along the fold lines."
				)
			)
		)
	),
	array(
		'title' => "Leather Accessories & Coordinate Guide",
		'slug'  => 'accessories-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines selection criteria and maintenance steps for leather accessories. It details differences between full-grain and split leather, coordinates belt and wallet designs, and covers hardware and stitch checking. It also lists guidelines to protect leather from Delhi's humidity and dust.",
			'ame_key_takeaways'       => array(
				"Verify Leather Grades: Choose full-grain leather for long-lasting durability; split and PU leathers crack and peel under daily wear and sun exposure.",
				"Inspect Hardware: Ensure metal buckles and zippers are made of rust-resistant alloy or solid brass to withstand humid weather.",
				"Match Coordinates: For formal and ethnic wear, match the leather color and buckle finish of your belt to your shoes and wallet."
			),
			'ame_associated_pillar'  => 'accessories',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Accessories Advisor',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "How do I distinguish genuine leather from PU leather?",
					'a' => "Genuine leather has an uneven pore structure, a natural scent, and absorbs small drops of water. PU leather has a uniform, plastic-like texture, chemical smell, and water slides off completely."
				),
				array(
					'q' => "Why is my leather belt cracking, and how do I stop it?",
					'a' => "Leather cracks when it loses its natural oils. Exposure to heat dries the leather. Apply a thin coat of conditioning cream every six months to keep it soft."
				),
				array(
					'q' => "How do I remove green tarnish from my belt buckle?",
					'a' => "This tarnish occurs when copper or brass alloys oxidize from moisture. Gently wipe the buckle with a cloth dipped in a vinegar-water mix, then wipe dry immediately."
				)
			)
		)
	),
	array(
		'title' => "Tailoring & Alteration Guide",
		'slug'  => 'tailoring-alteration-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines body measurement and alteration procedures for men's and women's garments. It details inseam, rise, and sleeve crown adjustments, maps common alteration types to cost/time estimates, and explains fit metrics (comfort vs. slim). It also highlights alteration checks like side-seam margins and stitch types.",
			'ame_key_takeaways'       => array(
				"Measure Over Active Layers: Always measure your waist and chest over the type of undergarments or innerwear you plan to wear with the final outfit.",
				"Side Seam Margins: Before purchasing off-the-rack garments, check for at least 1.5 inches of internal margin to allow for waist or bust adjustments.",
				"Single-Break Trousers: Hem trousers to rest lightly on shoe laces. This creates a clean look and keeps hems from dragging on dusty streets."
			),
			'ame_associated_pillar'  => 'tailoring',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Master Pattern Maker',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "Can a tight shirt be let out?",
					'a' => "Only if the garment has sufficient inner side-seam margins. Check inside the shirt; if there is at least 1 inch of spare fabric on each side, the shirt can be let out."
				),
				array(
					'q' => "What does 'single break' mean for trousers?",
					'a' => "A single break means the trouser hem rests lightly on the top of your shoe, creating a single soft fold in the fabric. This keeps the hem clean and off the ground."
				),
				array(
					'q' => "Why are shoulder alterations so expensive?",
					'a' => "Shoulder alterations require removing the sleeves, recutting the armhole, and reattaching the sleeve crown. This is a skilled process that takes time to align properly."
				)
			)
		)
	),
	array(
		'title' => "Festival Fashion & Coordinate Guide",
		'slug'  => 'festival-fashion-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines color matching and fabric selection guidelines for family festival wear coordinates. It covers Diwali, Eid, and Puja outfit requirements, explains safety specifications (fire-resistant cotton weights, border weights), and details stain removal steps for Holi. It also covers custom alterations schedules.",
			'ame_key_takeaways'       => array(
				"Choose Fire-Safe Fabrics: For Diwali and Puja events involving diyas and sparklers, prioritize mid-weight cotton coordinates (120–150 GSM) over flammable synthetics like polyester or georgette.",
				"Plan Family Coordinates: Coordinate family outfits by matching secondary colors (e.g., matching the dupatta or pocket square color to the children's outfits) rather than identical colors.",
				"Inspect Border Weights: Heavy borders keep garments weighted and close to the body, reducing the risk of catching fire from festive oil lamps."
			),
			'ame_associated_pillar'  => 'store',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Festive Stylist Coordinator',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "What fabrics are safest to wear near festive oil lamps (diyas)?",
					'a' => "Pure cotton and cotton-silk blends are the safest choices. They have high ignition points and do not melt when exposed to sparks, unlike synthetic polyester or nylon."
				),
				array(
					'q' => "How can I coordinate my family's outfits without wearing identical colors?",
					'a' => "Choose a shared accent color. If the father wears a cream kurta with a maroon pocket square, the mother can wear a maroon saree, and the children can wear cream outfits with maroon borders."
				),
				array(
					'q' => "How do I remove turmeric (haldi) stains from cotton clothes?",
					'a' => "Apply a paste of liquid detergent and baking soda to the stain, let it sit for 15 minutes, wash in cold water, and air-dry in direct sunlight to fade the stain."
				)
			)
		)
	),
	array(
		'title' => "Wedding Shopping & Trousseau Guide",
		'slug'  => 'wedding-shopping-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines wedding trousseau planning, family outfit coordination, and fitting schedules. It details fabric selections (silk brocades, linings), lists step-by-step alteration timelines (30-day window), and explains dupatta pinning and can-can netting adjustments. It also covers professional dry cleaning and storage.",
			'ame_key_takeaways'       => array(
				"30-Day Fitting Window: Complete final alterations exactly 30 days before the wedding date to accommodate body weight shifts and coordinate trials.",
				"Inspect Under-Linings: Heavy bridal lehengas and groom sherwanis require soft cotton or satin under-linings to prevent chafing from metallic zari embroidery threads.",
				"Adjust Can-Can Netting: Ensure the can-can netting is hemmed at least 2 inches shorter than the outer skirt to prevent it from catching on shoes or floor surfaces."
			),
			'ame_associated_pillar'  => 'store',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Bridal Fitting Consultant',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "How early should I buy and alter my wedding outfit?",
					'a' => "We recommend purchasing your outfit 90 days before the wedding. Complete the first fitting 45 days out, and perform the final fitting exactly 30 days before the wedding to accommodate weight shifts."
				),
				array(
					'q' => "Why is my lehenga skirt dragging even though the length was measured?",
					'a' => "This occurs when the length is measured without wearing the actual wedding shoes. Always bring your wedding shoes to every fitting session."
				),
				array(
					'q' => "How do I prevent my heavy bridal dupatta from pulling on my hair?",
					'a' => "Use a double-pinning method. Secure the dupatta to your hair with bobby pins, and use a safety pin to secure the fabric to the shoulder seam of your blouse to distribute the weight."
				)
			)
		)
	),
	array(
		'title' => "Delhi Seasonal Clothing & GSM Guide",
		'slug'  => 'seasonal-clothing-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines fabric specifications and layering setups for Delhi's climate. It details temperature transitions, maps seasonal clothing coordinates to fabric GSM (Grams per Square Meter) targets, and explains summer ventilation and winter insulation setups. It also covers seasonal storage and maintenance.",
			'ame_key_takeaways'       => array(
				"Verify Fabric GSM: Use fabrics under 120 GSM for summer ventilation and heat relief; choose 180+ GSM weaves for winter insulation.",
				"Layering for Winters: Layer lightweight thermal innerwear beneath mid-weight cotton or wool-blend shirts to trap heat effectively.",
				"Store Dry for Monsoons: Protect seasonal garments from humidity during the monsoon by using vacuum-sealed bags and silica gel packs to prevent mold."
			),
			'ame_associated_pillar'  => 'store',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Climate Fabric Analyst',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "What is GSM, and why does it matter for summer clothes?",
					'a' => "GSM stands for Grams per Square Meter. It measures fabric density. A lower GSM (80–110) means the fabric is lightweight and breathable, which is ideal for hot summers."
				),
				array(
					'q' => "How do I layer clothes for Delhi winters without looking bulky?",
					'a' => "Use a thin, snug-fitting thermal base layer, followed by a mid-weight cotton shirt (130-150 GSM), and top with a wool-blend sweater or jacket. This traps heat in layers without adding bulk."
				),
				array(
					'q' => "How do I store woolens to prevent moth damage?",
					'a' => "Clean all woolen garments to remove sweat and oils before storing. Place them in airtight cotton or vacuum bags with cedar wood chips or dried neem leaves to repel pests."
				)
			)
		)
	),
	array(
		'title' => "Fabric Care, Laundering & Storage Guide",
		'slug'  => 'fabric-care-guide',
		'meta'  => array(
			'ame_factual_summary'    => "This guide outlines care and maintenance procedures for common apparel fibers. It covers laundering for cotton, silk, rayon, and wool, details stain removal steps (ink, grease, turmeric), and explains color bleeding checks (saltwater pre-soaking). It also covers storage practices to prevent damage.",
			'ame_key_takeaways'       => array(
				"Wash Cold: Wash natural cottons, silks, and woolens in cold water (under 30°C) with pH-neutral detergent to prevent shrinkage and color bleeding.",
				"Check for Bleeding: Test new handloom or bright garments for color bleeding by dampening a small patch and pressing it against a white cloth.",
				"Store Flat: Dry and store woolens and heavy silks flat rather than hanging them, which can stretch the fibers and distort the shape."
			),
			'ame_associated_pillar'  => 'store',
			'ame_last_reviewed_date' => '2026-06-30',
			'ame_author_title'       => 'Fabric Quality Manager',
			'ame_editorial_status'   => 'published',
			'ame_local_faqs'         => array(
				array(
					'q' => "How do I test a new kurti for color bleeding before washing?",
					'a' => "Dampen a small, inconspicuous patch of the garment (like the inner hem) with water and press it flat against a clean white cotton cloth. If any color transfers to the white cloth, wash the kurti separately."
				),
				array(
					'q' => "Why does my cotton shirt feel stiff after air drying, and how do I soften it?",
					'a' => "Stiffness is caused by minerals in hard water building up on the fabric. To soften it, add half a cup of white vinegar to the final rinse cycle, or steam iron the dry shirt."
				),
				array(
					'q' => "Can I wash dry-clean-only silk sarees at home?",
					'a' => "If you must wash it, hand-wash gently in cold water with baby shampoo. Do not wring or twist. Roll it in a dry towel to squeeze out excess water, and air-dry flat in the shade."
				)
			)
		)
	)
);

WP_CLI::line( "Starting AME Bazaar Pillar Page Import..." );

foreach ( $pillars as $p ) {
	// Check if already exists
	$existing = get_page_by_path( $p['slug'], OBJECT, 'page' );
	
	$post_data = array(
		'post_title'   => $p['title'],
		'post_name'    => $p['slug'],
		'post_status'  => 'publish',
		'post_type'    => 'page',
		'post_author'  => 1,
	);
	
	if ( $existing ) {
		$post_data['ID'] = $existing->ID;
		$post_id = wp_update_post( $post_data );
		WP_CLI::success( "Updated existing page: " . $p['title'] . " (ID: {$post_id})" );
	} else {
		$post_id = wp_insert_post( $post_data );
		WP_CLI::success( "Created new page: " . $p['title'] . " (ID: {$post_id})" );
	}
	
	if ( $post_id ) {
		// Set Page Template
		update_post_meta( $post_id, '_wp_page_template', 'templates/template-pillar.php' );
		
		// Set custom metadata
		foreach ( $p['meta'] as $key => $value ) {
			update_post_meta( $post_id, $key, $value );
		}
		
		WP_CLI::line( "   Metadata and templates synced for ID {$post_id}." );
	}
}

WP_CLI::success( "AME Bazaar Knowledge Library deployment complete!" );
