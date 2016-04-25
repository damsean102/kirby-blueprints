<?php if(!defined('KIRBY')) exit; ?>

title: Event
pages: false
files: false
fields:
    headline-1:
        label: Event Details
        type: headline
    title:
        label: Title
        type: title
        required: true
    date:
        label: Date
        type: date
        default: today
        format: DD/MM/YYYY
        required: true
        width: 1/2
    time:
        label: Start Time
        type: time
        interval: 30
        required: true
        width: 1/2
    text:
        label: Text
        type: textarea
        required: true
    location:
        label: Location
        type: text
        help: Please enter a town or postcode...
        placeholder: Town or postcode
        icon: map-marker