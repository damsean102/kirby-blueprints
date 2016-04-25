<?php if(!defined('KIRBY')) exit; ?>

title: Blog Article
pages: false
files: true
fields:
    headline-1:
        label: Article Content
        type: headline
    title:
        label: Title
        type: title
    date:
        label: Date
        type: date
        width: 1/2
        default: today
    author:
        label: Author
        type: user
        width: 1/2
    text:
        label: Text
        type: textarea
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