<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Metafix

Metafix is a web application and an orthopedic service online ordering system

## Business Overview

The business of the project client is about providing orthopedic services in San Fernando and Angeles City residing in Pampanga. The focus of their service is to sell orthopedic implant and assist the orthopedic doctor in their orthopedic surgery using the orthopedic implant that the orthopedic doctor bought. Those who assists are called orthopedic technician. Orthopedic technician delivers the orthopedic implant and assists the doctor by utilizing the orthopedic implant during the surgery

## Motivation

Metafix was initiated by the main contributor and lead developer of the project, Adrian John Antonio. He is also the son of the project client and saw the inefficient transaction between the project client and orthopedic doctors, and messy organization of orthopedic implants in their business inventory. He found out the solution to the problem after
constantly meeting and asking questions about the business with the project client. Him and the team decided to provide solution to the business problems stated by the project client to the
lead developer, thus Metafix was created.

## Problem

Here are the problems identified in the current business workflow of the client's business:

<ul>
<li>Inefficient manual writing of documentation of orthopedic implants in their inventory</li>
<li>Inefficient, phone-to-phone transaction between the project client and orthopedic doctors</li>
<li>Limited face-to-face transaction due to the rise of pandemic</li>
<li>Lacking transparency of the business and orthopedic implants to the outside world</li>
</ul>

## How the Website Solved the Identified Pain Points

Here are the solution for each identified problems in the current business workflow:

**Inefficient manual writing of documentation of orthopedic implants in their inventory**
<br>

<p>The website has an administrator account that lets the project client create, read, update, and delete information of orthopedic implants in their inventory with only a few steps</p>

<br>

**Inefficient, phone-to-phone transaction between the project client and orthopedic doctors**

<p>The website has an ordering system where the orthopedic doctors can digitally order the orthopedic implant that they want without needing to make a transaction through a phone call</p>
<br>

**Limited face-to-face transaction due to the rise of pandemic**

<p>The website lets the orthopedic doctors order an orthopedic implant digitally without needing to physically meet with the project client</p>
<br>

**Lacking transparency of the business and orthopedic implants to the outside world**

<p>The website displays the available and unavailable orthopedic implants owned by the project client and the business details of the project client. It also displays which orthopedic implant types they offer and details of each implant</p>

## Website Features

The website have a home, FAQ, login, and register page that is transparent to all types of users including guests.
Currently, the website only has two user types that can access other services of the website: orthopedic doctor and administrator. To register an account in the system as an orthopedic doctor, <b>you need to be a licensed orthopedic doctor</b> otherwise you can't register an account.
This is because the current business workflow do not permit non-orthopedic doctors to use orthopedic implants to prevent misuse of the product. Orthopedic implants should only be used by orthopedic doctors and technicians. The website adopted this part of business workflow.
<br><br>
The administrator have a module where they can view, accept, and reject user accounts. The administrator have the responsibility to accept and delete these accounts. If the pending user account is accepted, the system will automatically email them telling that their account is officially registered in the system and can access different features exclusive for orthopedic doctors. If rejected, the system will automatically email them telling that their account is rejected, thus won't be able to officially register their account. Also, the record of their account will be deleted in the database.
<br>
Here are the exclusive features for orthopedic doctors:

<ul>
<li>Order an orthopedic implant and generate a quotation</li>
<li>Check their history transaction with the project client</li>
<li>View orthopedic implants they added in their cart</li>
</ul>

Here are the exclusive features for the administrator:

<ul>
<li>View, accept, and reject pending user accounts</li>
<li>Check history transaction with orthopedic doctors</li>
<li>Create, read, update, and delete information of orthopedic implants in their inventory</li>
<li>Create, read, update, and delete information of orthopedic technicians working with the project client</li>
</ul>

## Technologies Used

Technology languages used to build the client-side or front-end of the website:

<ul>
<li>HTML</li>
<li>CSS</li>
<li>JavaScript</li>
<li>jQuery</li>
<li>Bootstrap</li>
<li>Vue.js (only for the login and registration pages)</li>
</ul>

Technology languages used to build the back-end of the website:

<ul>
<li>Laravel</li>
<li>MySQL</li>
</ul>

Technology tools used to design the website UI and back-end architecture:

<ul>
<li>MySQL Workbench</li>
<li>Figma</li>
<li>Visual Paradigm</li>
</ul>

Packages used to add other website features:

<ul>
<li>SwiftMailer</li>
<li>Faker</li>
</ul>

Others:

<ul>
<li>Session storage</li>
</ul>

## Deployment Status

The application is <b>not yet fully deployed</b>. The application will be deployed in the future but only for demonstration purposes unless our project client wants to use our application in the future.

## Credits

The team would like to thank <b>Sir Jacob A. Catayoc</b>, <b>Jayson M. Pamittan</b>, and <b>Jojo Castillo</b> for being a helpful and excellent mentors of the team. Thanks to <b>Adrian John Antonio</b> for being a main contributor of this repository as a lead developer, product owner, and architect lead of the project. Thanks to <b>John Ace Asia</b> for contributing to this repository as an assistant developer, project manager, and automation tester of the project. Thanks to <b>Joy Hazzel Belanio</b> for the documentation and <b>John Benedict Cruz</b> for the documentation, quality testing, and wireframe designer of the project. Special thanks to the project client and his wife for consistently collaborating with the team to make this project a success.
