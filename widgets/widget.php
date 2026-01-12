<?php
if (!defined ('ABSPATH')) { exit; }

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
use Elementor\Utils;
use Elementor\Icons_Manager;

class Elementor_Contacts_Accordion extends Widget_Base {
  public function get_name() { return 'Contacts Accordion'; }
  public function get_title() { return esc_html__( 'Contacts Accordion', 'elementor-contacts-accordion' ); }
  public function get_icon() { return 'eicon-contact'; }
  public function get_categories() { return ['layout']; }
  public function get_keywords() { return ['card', 'contacts', 'accordion']; }

  protected function register_controls() {
		$this->start_controls_section (
			'company_content', [
				'label' => esc_html__( 'Companies', 'elementor-contacts-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'company_repeater', [
				'label' => esc_html__( 'Company list', 'elementor-contacts-accordion' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'company_title',
						'label' => esc_html__( 'Company Title', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Company Title',
						'placeholder' => esc_html__( 'Enter Company Title', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_id',
						'label' => esc_html__( 'Company Employee Id', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::NUMBER,
						'min' => -100,
						'max' => 100,
						'step' => 1,
						'default' => 0,
						'placeholder' => esc_html__( 'Company and Employee Id must match', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_description',
						'label' => esc_html__( 'Company Description', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Company Description',
						'placeholder' => esc_html__( 'Enter Company Description', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_adress',
						'label' => esc_html__( 'Company Adress', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Company Adress',
						'placeholder' => esc_html__( 'Enter Company Adress', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_schedule',
						'label' => esc_html__( 'Company Schedule', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'I-V: 8:00 - 17:00, VI-VII: -',
						'placeholder' => esc_html__( 'Enter Company Schedule', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_social_media',
						'label' => esc_html__( 'Company Social Media Type', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'WhatsApp',
						'placeholder' => esc_html__( 'Enter Company Social Media Type', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_social_media_link',
						'label' => esc_html__( 'Company Social Media Link', 'elementor-contacts-accordion' ),
						'type' => \Elementor\Controls_Manager::URL,
						'label_block' => true,
						'placeholder' => esc_html__( 'https://www.google.com', 'elementor-contacts-accordion' ),
						'default' => [
							'url' => 'https://www.google.com',
							'is_external' => true,
						],
					],
					[
						'name' => 'company_social_media_icon',
						'label' => esc_html__( 'Company Social Media Link Icon', 'elementor-contacts-accordion' ),
						'label_block' => true,
						'type' => Controls_Manager::ICONS,
						'default' => [
							'value' => 'fab fa-whatsapp',
							'library' => 'fa-brands',
						],
					],
				],
				'title_field' => '{{{ company_title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section (
			'employee_content', [
				'label' => esc_html__( 'Employees', 'elementor-contacts-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'employee_repeater', [
				'label' => esc_html__( 'Employee list', 'elementor-contacts-accordion' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'employee_name',
						'label' => esc_html__( 'Employee Name', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Employee Name',
						'placeholder' => esc_html__( 'Enter Employee Name', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'company_id',
						'label' => esc_html__( 'Company Employee Id', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::NUMBER,
						'min' => -100,
						'max' => 100,
						'step' => 1,
						'default' => 0,
						'placeholder' => esc_html__( 'Company and Employee Id must match', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'employee_image',
						'label' => esc_html__( 'Employee Image', 'elementor-contacts-accordion' ),
						'label_block' => true,
						'type' => Controls_Manager::MEDIA,
						'default' => [ 'url' => Utils::get_placeholder_image_src() ],
					],
					[
						'name' => 'employee_image_description',
						'label' => esc_html__( 'Employee Image description', 'elementor-contacts-accordion' ),
						'label_block' => true,
						'type' => Controls_Manager::TEXT,
						'default' => 'Employee image',
						'placeholder' => esc_html__( 'Enter Employee Image description', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'staff_position',
						'label' => esc_html__( 'Employee Position', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Employee Position',
						'placeholder' => esc_html__( 'Enter Employee Position', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'employee_phone_number',
						'label' => esc_html__( 'Employee Phone Number', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Employee Phone Number',
						'placeholder' => esc_html__( 'Enter Employee Phone Number', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'employee_email',
						'label' => esc_html__( 'Employee Email', 'elementor-contacts-accordion' ),
						'type' => Controls_Manager::TEXT,
						'label_block' => true,
						'default' => 'My Employee Email',
						'placeholder' => esc_html__( 'Enter Employee Email', 'elementor-contacts-accordion' ),
					],
					[
						'name' => 'employee_languages',
						'label' => esc_html__( 'Select Employee Languages', 'elementor-contacts-accordion' ),
						'type' => \Elementor\Controls_Manager::SELECT2,
						'label_block' => true,
						'multiple' => true,
						'options' => [
							'LT' => esc_html__( 'Lithuanian', 'elementor-contacts-accordion' ),
							'EN' => esc_html__( 'English', 'elementor-contacts-accordion' ),
							'PL' => esc_html__( 'Polish', 'elementor-contacts-accordion' ),
							'FR' => esc_html__( 'French', 'elementor-contacts-accordion' ),
							'ES' => esc_html__( 'Spanish', 'elementor-contacts-accordion' ),
							'GR' => esc_html__( 'German', 'elementor-contacts-accordion' ),
							'NL' => esc_html__( 'Dutch', 'elementor-contacts-accordion' ),
							'UA' => esc_html__( 'Ukrainian', 'elementor-contacts-accordion' ),
							'RO' => esc_html__( 'Romanian', 'elementor-contacts-accordion' ),
							'RU' => esc_html__( 'Russian', 'elementor-contacts-accordion' ),
						],
						'default' => [ 'LT', 'EN' ],
					],
				],
				'title_field' => '{{{ employee_name }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section (
			'company_settings', [
				'label' => esc_html__( 'Company Settings', 'elementor-contacts-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'closed_accordion_color', [
				'label' => __( 'Closed Accordion Color', 'elementor-contacts-accordion' ),
				'default' => '#76a8ffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .accordion-contacts-container' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'opened_accordion_color', [
				'label' => esc_html__( 'Opened Accordion Color', 'elementor-contacts-accordion' ),
				'default' => '#d4e4ffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .accordion-contacts-container:has(#second-row.active)' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_alignment', [
				'label' => esc_html__( 'Company Title Text Alignment', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'text-align: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_color', [
				'label' => esc_html__( 'Company Title Text Color', 'elementor-contacts-accordion' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_title_size', [
				'label' => esc_html__( 'Company Title Text Size', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 26,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 18,
				],
				'selectors' => [ '{{WRAPPER}} .company-title' => 'font-size: {{SIZE}}{{UNIT}};', ],
			]
		);

		$this->add_control (
			'company_title_weight', [
				'label' => esc_html__( 'Company Title Text Weight', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => esc_html__( 'Lighter', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => esc_html__( 'Normal', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => esc_html__( 'Bold', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-title' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'company_description_alignment', [
				'label' => esc_html__( 'Company Description Text Alignment', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .company-description' => 'justify-content: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_description_color', [
				'label' => esc_html__( 'Company Description Text Color', 'elementor-contacts-accordion' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-description' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'company_description_icons_color', [
				'label' => __( 'Company Description Icons Color', 'elementor-contacts-accordion' ),
				'default' => '#000000ff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .company-description svg' => 'fill: {{VALUE}};', ],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section (
			'employee_settings', [
				'label' => esc_html__( 'Employee Settings', 'elementor-contacts-accordion' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control (
			'employee_container_color', [
				'label' => esc_html__( 'Employee Container Color', 'elementor-contacts-accordion' ),
				'default' => '#b0cdffff',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-card-container' => 'background-color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_name_color', [
				'label' => esc_html__( 'Employee Name Text Color', 'elementor-contacts-accordion' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_name_size', [
				'label' => esc_html__( 'Employee Name Text Size', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 32,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'font-size: {{SIZE}}{{UNIT}};', ],
			]
		);

		$this->add_control (
			'employee_name_weight', [
				'label' => esc_html__( 'Employee Name Text Weight', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'lighter' => [
						'title' => esc_html__( 'Lighter', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-arrow-left',
					],
					'normal' => [
						'title' => esc_html__( 'Normal', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-editor-bold',
					],
					'bold' => [
						'title' => esc_html__( 'Bold', 'elementor-contacts-accordion' ),
						'icon' => 'eicon-arrow-right',
					],
				],
				'default' => 'left',
				'toggle' => false,
				'selectors' => [ '{{WRAPPER}} .staff-name-container' => 'font-weight: {{VALUE}};', ],				
			],
		);

		$this->add_control (
			'employee_position_color', [
				'label' => esc_html__( 'Employee Position Text Color', 'elementor-contacts-accordion' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-position-container' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_position_size', [
				'label' => esc_html__( 'Employee Position Text Size', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 32,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-position-container' => 'font-size: {{SIZE}}px;', ],
			]
		);

		$this->add_control (
			'employee_btn_text_color', [
				'label' => esc_html__( 'Employee Button Text Color', 'elementor-contacts-accordion' ),
				'default' => '#1D2430',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'color: {{VALUE}};', ],
			]
		);

		$this->add_control (
			'employee_btn_text_size', [
				'label' => esc_html__( 'Employee Button Text Size', 'elementor-contacts-accordion' ),
				'label_block' => true,
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 8,
						'max' => 18,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 16,
				],
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'font-size: {{SIZE}}px;', ],
			]
		);

		$this->add_control (
			'employee_button_color', [
				'label' => esc_html__( 'Employee Button Color', 'elementor-contacts-accordion' ),
				'default' => '#F5F7FA',
				'type' => Controls_Manager::COLOR,
				'selectors' => [ '{{WRAPPER}} .staff-button' => 'background-color: {{VALUE}};', ],
			]
		);
		$this->end_controls_section();
	}

  protected function render() { 
		$settings = $this->get_settings_for_display();
		if ( !$settings['company_repeater'] || !$settings['employee_repeater'] ) { return; }
		?>
		<div class="accordion-widget-container">
			<?php foreach ( $settings['company_repeater'] as $index => $company ) : ?>
				<div class="accordion-contacts-container">
					<div class="first-row">
						<div class="company-names-container">
							<p class="company-title">	
								<?php echo $company['company_title']; ?>
							</p>
							<p class="company-description">
								<?php echo $company['company_description']; ?>
							</p>
						</div>
						<div class="company-locations-container">
							<p class="company-description">
								<?php Icons_Manager::render_icon( ['value' => 'fas fa-map',	'library' => 'fa-solid',], ['aria-hidden' => 'true'] ); ?>
								<?php echo $company['company_adress']; ?>
							</p>
							<p class="company-description">
								<?php Icons_Manager::render_icon( [ 'value' => 'fas fa-business-time','library' => 'fa-solid',], ['aria-hidden' => 'true'] ); ?>
								<?php echo $company['company_schedule']; ?>
							</p>
						</div>
						<div class="info-buttons-container">
							<a href="<?php echo $company['company_social_media_link']['url']; ?>">
								<button class="company_social_btn"><?php Icons_Manager::render_icon( $company['company_social_media_icon'], ['aria-hidden' => 'true'] ); ?> <?php echo $company['company_social_media']; ?></button>
							</a>
							<button class="expand-accordion-btn"><</button>
						</div>
					</div>
					<?php if($index == 0) : ?> <div id="second-row" class="active">
					<?php else : ?> <div id="second-row" class="">
					<?php endif; ?>
						<?php foreach ( $settings['employee_repeater'] as $index => $staff ) : ?>
							<?php	if ($staff['company_id'] == $company['company_id']) { ?>
								<div class="staff-card-container">
									<div class="staff-img-container">
										<img src="<?php echo esc_url($staff['employee_image']['url'] )?>"
										alt="<?php echo ($staff['employee_image_description'] )?>"
										class="staff-img"/>
									</div>
									<div class="staff-info-container">
										<div class="staff-text-container">
											<div class="staff-description-container">
												<p class="staff-name-container"><?php echo $staff['employee_name']; ?></p>
												<p class="staff-position-container"><?php echo $staff['staff_position']; ?></p>
											</div>
											<div class="staff-languages-container">
												<?php foreach ( $staff['employee_languages'] as $index => $language ) : ?>
													<p class="staff-languages"><?php echo $language; ?></p>
												<?php endforeach; ?>
											</div>
										</div>
										<a href="tel:<?php echo $staff['employee_phone_number']; ?>">
											<button class="staff-button">
											<?php Icons_Manager::render_icon( ['value' => 'fas fa-envelope', 'library' => 'fa-solid'], ['aria-hidden' => 'true'] ); ?>
											<?php echo $staff['employee_phone_number']; ?></button>
										</a>
										<a href="mailto:<?php echo $staff['employee_email']; ?>">
											<button class="staff-button">
											<?php Icons_Manager::render_icon( ['value' => 'fas fa-comment',	'library' => 'fa-solid'], ['aria-hidden' => 'true'] ); ?>
											<?php echo $staff['employee_email']; ?></button>
										</a>
									</div>
								</div>
							<?php } ?>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<?
  }
}