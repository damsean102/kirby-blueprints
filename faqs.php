<?php if(!defined('KIRBY')) exit; ?>

title: FAQ
pages: false
files: false
fields:
    headline-1:
        label: Frequently Asked Question
        type: headline
    question:
        label: Question
        type: title
    text:
        label: Answer
        type: textarea
    categories:
        label: Categories
        type: checkboxes
        options:
          cat-1: Category One
          cat-2: Category Two
          cat-3: Category Three
          cat-4: Category Four
          cat-5: Category Five
    tags:
        label: Tags
        type: tags