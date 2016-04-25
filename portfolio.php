<?php if(!defined('KIRBY')) exit; ?>

title: Portfolio
pages: false
files: true
fields:
  headline-1:
    label: Content
    type: headline
  title:
    label: Title
    type: title
  text:
    label: Text
    type: textarea
    required: true
  link:
    label: URL
    type: url
    width: 1/2
    required: true
  user-1: 
    label: Created by...
    type: user
    width: 1/2
  headline-2:
    label: Categories and Tags
    type: headline
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