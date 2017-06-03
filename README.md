# SilverStripe Testimonials Widgets 

These are widgets you can use with the [Silverstripe Testimonials](http://github.com/rattfieldnz/silverstripe-testimonials) module.

## Installation 

### Step 1

Go to the root of your Silverstripe project, and enter :

`composer self-update && composer require rattfieldnz/silverstripe-testimonials-widgets`

### Step 2 

In your project's mysite/_config/config.yml file, insert the following:

```
TestimonialsHolderPage: 
  no_of_testimonials_in_widget: 2 
  testimonial_words_summary_count: 50
```

The above should be self-explanatory :).

### Step 3

Run the following command to populate your Silverstripe project's database with this module's details: 

`php framework/cli-script.php dev/build flush=all`

### Step 4

Go to a page you have created, e.g. your 'home' page. Make sure you have already [configured it so it can display widgets](https://github.com/silverstripe/silverstripe-widgets). 

When you go to edit your page, you should see two tabe on the left hand side - 'Main Content' and another tab for widgets. If you see the latter, you can proceed to the next step.

### Step 4

You should see all the available widgets in your SilverStripe project. The widgets we are looking for are 'Testimonial' and 'Testimonials'.

'Testimonial' displays a single randomly-selected testimonial that has been published.

'Testimonials' displays multiple randomly-selected testimonials which have been published.

### Step 5

Select either, or both, of these widgets and then save your page. You should now see the widget/s and its/their content on the page you just added them to. 

If not, append ?flush=all and revisit your page's URL.

If the above does not work, remove the cache files with the command `sudo rm -rf /tmp/`.

## Contributing and Feedback

I have just recently started Silverstripe development, and am still learning the awesome ecosystem that it is. If you see anything I have missed, or constructive ideas to make this module better, please contact me and let me know. You can even fork this repo and play with the code yourself too :).
