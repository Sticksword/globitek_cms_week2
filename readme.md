# Project 2 - Input/Output Sanitization

Time spent: **10** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. [X]  Required: Import the Starting Database

2\. [X]  Required: Set Up the Starting Code

3\. [X]  Required: Review code for Staff CMS for Users

4\. [X]  Required: Complete Staff CMS for Salespeople
  * [X]  Required: index.php
  * [X]  Required: show.php
  * [X]  Required: new.php
  * [X]  Required: edit.php

5\. [X]  Required: Complete Staff CMS for States
  * [X]  Required: index.php
  * [X]  Required: show.php
  * [X]  Required: new.php
  * [X]  Required: edit.php

6\. [X]  Required: Complete Staff CMS for Territories
  * [X]  Required: index.php
  * [X]  Required: show.php
  * [X]  Required: new.php
  * [X]  Required: edit.php

7\. [X]  Required: Add Data Validations
  * [X]  Required: Validate that no values are left blank.
  * [X]  Required: Validate that all string values are less than 255 characters.
  * [X]  Required: Validate that usernames contain only the whitelisted characters.
  * [X]  Required: Validate that phone numbers contain only the whitelisted characters.
  * [X]  Required: Validate that email addresses contain only whitelisted characters.
  * [?]  Required: Add *at least 5* other validations of your choosing. (I think there's 5)

8\. [X]  Required: Sanitization
  * [X]  Required: All input and dynamic output should be sanitized.
  * [?]  Required: Sanitize dynamic data for URLs (wait since url's only pull from ID's, what do we need to sanitize?)
  * [X]  Required: Sanitize dynamic data for HTML
  * [X]  Required: Sanitize dynamic data for SQL

9\. [X]  Required: Penetration Testing
  * [X]  Required: Verify form inputs are not vulnerable to SQLI attacks.
  * [X]  Required: Verify query strings are not vulnerable to SQLI attacks.
  * [X]  Required: Verify form inputs are not vulnerable to XSS attacks.
  * [X]  Required: Verify query strings are not vulnerable to XSS attacks.
  * [?]  Required: Listed other bugs or security vulnerabilities (side note: I'm making a separate repo of notable tl;dr security stuff)


The following advanced user stories are optional:

- [ ]  Bonus: On "public/staff/territories/show.php", display the name of the state.

- [X]  Bonus: Validate the uniqueness of `users.username`.

- [ ]  Bonus: Add a page for "public/staff/users/delete.php".

- [ ]  Bonus: Add a Staff CMS for countries.

- [ ]  Advanced: Nest the CMS for states inside of the Staff CMS for countries

Sorry I have been particularly busy. I do however have an understanding of how to do the bonus but implmentation wise, I only did the validation checks to see if it works.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.
