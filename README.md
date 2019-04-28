# **The Dating Assignment: Part II**

### Overview

The registration system for your online dating website will set up a new dating profile with many details of a user.

This assignment will focus on Fat-free routing and templating.

In the last assignment, you created a home page:

![first pic](http://rhill.greenriverdev.com/328/dating/images/specs/home.png)

When the user clicks the "Create a Profile!" button, they will be sent through 3 sequential screens to gather profile information: Personal Information --> Profile --> Interests. Each screen allows the user to enter their information and then click on a "Next" button to move to the next screen.

· Personal Information: This screen gathers name, age, gender & phone number.

![personal](http://rhill.greenriverdev.com/328/dating/images/specs/personalInfo.png)

· Profile: This screen gathers email, state the user is located in, gender interests (seeking) & biography

![profile](http://rhill.greenriverdev.com/328/dating/images/specs/Profile.png)

· Interests: This screen gathers two types of interests - outdoor & indoor. Use arrays to store the selected checkboxes.

![interests](http://rhill.greenriverdev.com/328/dating/images/specs/interests.png)

· Profile Summary: After entering all information into the three forms above, the website should display a summary screen with a Contact Me button. (The Contact Me button doesn't need to do anything at this point.)

![summary](http://rhill.greenriverdev.com/328/dating/images/specs/Summary.png)
### Implementation

#### **Implementation: Styles**

Each screen should look precisely as seen in the images above. This will require proper use of both CSS & Bootstrap. Be sure to note the following styles from the screenshots:

· A nav bar at the top of every page and a link in the nav bar that returns to the home page

*   Margins and padding around elements

· Use of <hr> elements to present vertical separation

*   Rounded corners on images and bootstrap panels

· Text and button elements that are centered on-screen or aligned on the right side of the screen.

#### **Implementation: Data**

Each form has a button leading to the next page. All data should be saved to a SESSION.

You do not need to worry about data validation or sticky forms - yet!

#### **Implementation: Folder Structure**

Your folders/files should maintain the organization from the previous assignment.

*   All CSS should be located in the **styles** folder
*   All images should be in the **images** folder

· All form pages and the Profile Summary are located in the **views** folder

*   Create a **model** folder to store a file containing validation functions

### Coding Conventions

Check that your HTML is valid at [https://html5.validator.nu/](https://html5.validator.nu/). Ensure a clear separation of HTML, CSS, and JS. Style tags should _not_ be embedded in HTML tags.

Each file should have a comment header with your name, the date, and a brief file

GitHub

Be sure to commit your code to GitHub regularly. You should have a minimum of 5 commits for this assignment.

Submission

For this assignment, submit a link to your dating site, and copy the URL of your GitHub repository into the Comments box.

Be sure to carefully review the Grading Rubric in Canvas before submitting your assignment.

# Dating IIB - Data Validation **Due May 5th, 2019**

# **The Dating Assignment: Part IIb**

Overview

In this assignment, you will add data validation and sticky forms to your app.

Specifications

Create a PHP file containing data validation functions and save it to your model folder. Define the following functions:

*   **validName()** checks to see that a string is all alphabetic
*   **validAge()** checks to see that an age is numeric and between 18 and 118
*   **validPhone()** checks to see that a phone number is valid (you can decide what constitutes a “valid” phone number)
*   **validEmail()** checks to see that an email address is valid
*   **validOutdoor()** checks each selected outdoor interest against a list of valid options
*   **validIndoor()** checks each selected indoor interest against a list of valid options

Make name, age, phone, and email required fields. Gender, bio, and interests are optional.

In your controller, require the validation file. When each form is submitted, validate the data in that form using the appropriate functions. If there is an error, display an inline error message and redisplay the form data (e.g. make the form sticky). If there are no errors, then store the data in session variables and display the next form.

Submission

For this assignment, submit the URL of your dating site, and copy the URL of your GitHub repository into the Comments section.
