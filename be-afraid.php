<?php
/**
 * The dumbing down of spoiled, complacent Westerners.
 *
 * @package    Financial_Military_Industrial_Complex
 * @subpackage Mainstream_Media
 *
 * @since      0.0.1
 * @author     Greg Sweet <greg@ccdzine.com>
 * @see        Edward Bernays
 * @link       https://archive.org/details/BernaysPropaganda
 */

// Bail if conditions aren't conducive to the function.
if ( ! ( have_distractions( 'on_phone' ) || have_faith( 'in_government' ) ) ) {
	return;
}

/**
 * Establish the agenda
 */
final class Banking_Elite {

	/**
	 * Implement various scenarios
	 *
	 * @since  9.25.1789
	 * @access public
	 * @return void Don't listen to known liars.
	 */
	public function __construct() {
		add_action( 'mainstream_media', [ $this, 'concerted_rhetoric' ], 1 );
	}

	/**
	 * Complete bullshit
	 *
	 * @since  12.23.1913
	 * @access public
	 * @global $banksters Global rulers of governments.
	 * @param  $propaganda Echoed by media on behalf of banksters.
	 * @global $banksters Global rulers of governments.
	 * @return string Echoes complete bullshit.
	 */
	function concerted_rhetoric( $propaganda ) {

		// Access the global banking agenda.
		global $banksters;

		// Get the option to justifiy mass murder.
		$justification = get_option( 'offensive_war' );

		// If the banks employ the United Nations and apply humanitarian justification for war:
		if ( $banksters->asset == 'united_nations' && 'humanitarian' == $justification ) {

			// Tug on heart strings yet also foment disdain.
			$humanitarianism = sprintf(
				'<h1>%1s</h1><p>%2s</p><p>%3s</p>',
				__( 'Rulers Are Harming Their Own People', 'known-liars' ),
				__( 'We must apply sanctions that only harm the people to keep the rulers from harming the people.', 'known-liars' ),
				__( 'Sanctions do not make rulers angry and desperate enough to retaliate, they are simply crazy and attacked us for no reason.', 'known-liars' )
			);

		// Ignore any humanitarian concerns if there are no banking interests.
		} else {
			$humanitarianism = null;
		}

		// If the banks employ the Pentagon and apply national interest justification for war:
		if ( $banksters->asset == 'pentagon' && 'national_interest' == $justification ) {

			// Generate anger and foment calls for action.
			$patriotism = sprintf(
				'<h1>%1s</h1><p>%2s</p><p>%3s</p>',
				__( 'The People Have Attacked Us and Our Allies', 'known-liars' ),
				__( 'They hate us because of our freedoms.', 'known-liars' ),
				__( 'Credible sources say that they are responsible for the attack.', 'known-liars' )
			);
		}

		// If the banks employ the CIA and apply national interest justification for war:
		if ( $banksters->asset == 'cia' && 'national_interest' == $justification ) {

				// Generate fear and foment disdain.
				$patriotism = sprintf(
					'<h1>%1s</h1><p>%2s</p><p>%3s</p>',
					__( 'The People Might Attack Us and Our Allies', 'known-liars' ),
					__( 'Their culture tells them to hate us because of our freedoms.', 'known-liars' ),
					__( 'Credible sources say plans and weapons are ready for attack.', 'known-liars' )
				);

		// Fallback of underlying maintenance rhetoric.
		} else {

			// Foment general angst and discomfort.
			$patriotism = sprintf(
				'<h1>%1s</h1><p>%2s</p><p>%3s</p>',
				__( 'The People Are Sponsors of Terrorism', 'known-liars' ),
				__( 'The folks we support are not terrorists, they are freedom fighters.', 'known-liars' ),
				__( 'The folks they support are not defending their homes from invasion, they are terrorists.', 'known-liars' )
			);
		}

		// Combine humanitarian and patriotic rhetoric.
		$rhetoric = $humanitarianism . $patriotism;

		// Apply a filter in case the rhetoric doen't work on the People.
		$propaganda = apply_filters( 'modify_media_lies', $rhetoric );

		// Echo the propaganda.
		echo $propaganda;
	}

}

// Empower the banking elite.
$washington_dc = new Banking_Elite;
