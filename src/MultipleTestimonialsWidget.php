<?php

class MultipleTestimonialsWidget extends Widget {

	private static $title = "Testimonials";
	private static $cmsTitle = "Testimonials";
	private static $description = "Displays multiple random testimonials from the database.";

	private static $has_one = array(
		'Page' => 'TestimonialsHolderPage'
	);

	protected $testimonials;

	function getTestimonials(){
		$limit = Config::inst()->get('TestimonialsHolderPage', 'no_of_testimonials_in_widget');
		if(empty($limit)){
			$limit = 2;
		}
		
		if(!$this->testimonials){
			$this->testimonials = Testimonial::get()->sort("RAND()")->limit($limit);
		}
		return $this->testimonials;
	}

	function getCMSFields(){
		$fields = parent::getCMSFields();
		$fields->push(
			DropdownField::create("PageID","Testimonials Holder Page",
				TestimonialsHolderPage::get()->map()->toArray()
			)->setHasEmptyDefault(true)
		);
		return $fields;
	}

}