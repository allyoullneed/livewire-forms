<?php

return [
    /**
     * Tag by which forms are rendered.
     * 
     * By default, forms are rendered by calling <livewire:statamic-form in="{form_handle}" />.
     * If it conflicts with an existing tag or if you simply prefer using another tag, you can change it to something else.
     * 
     */
    'tag' => 'statamic-form',


    /**
     * Behavior of the form in regard to default field values.
     * 
     * If set to 'prefill': the form is initially rendered with the default values of the fields prefilled in them.
     * If set to 'submit' : the form is initially rendered with empty fields, but default values will be set to empty fields upon submission.
     * If set to 'both'   : the form is initially rendered with the default values + any field that is cleared before submission will be reset to the default value instead of null.
     * 
     * When using 'submit'/'both', required fields will look to users like they are just optional, as the server never shows to users that it adds default values to empty fields.
     * 'prefill' makes it so what the user sees is what they submit, so this issue does not exist in that mode.
     * 
     * This parameter may be overridden on a per-form basis using the `default_values` attribute.
     */
    'default-values' => 'submit',

    /**
     * Behavior of the form when submitting.
     * Accepted values are:
     *  - refresh: The form is refreshed into a success message is displayed.
     *             This looks identical to how Statamic forms work. This is the default.
     *  - toast: A toast message is displayed to the screen.
     */
    'on-submit' => 'toast',

    /**
     * Event type the form will emit and that the toast must listen to.
     * see https://allyoullneed.com/components/toast
     */
    'listen-to' => 'notify',


    /**
     * Have the form add a toast area itself, so you do not have to (in the layout).
     */
    'add-toast' => false,

    /**
     * Class of the toast area, required to set the position of the messages where you want.
     * The default is the responsive placement presented in https://allyoullneed.com/components/toast 
     */
    'toast-class' => 'top-0 left-0 md:bottom-0 md:left-[unset] md:right-0 md:top-[unset] md:max-w-md lg:max-w-lg',

    /**
     * Show a badge for required fields.
     * Set the value to 'off' to remove them.
     */
    'show-required-badges' => 'on'

];
