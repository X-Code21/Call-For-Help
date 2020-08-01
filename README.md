# Call For Help

Call For Help is an app-based solution proposed by us(X_Code team) towards the COVID-19 track. We have developed this project considering
the ease of its usage by every age group users.

# Screenshots

<p float="left">
 <img src="https://github.com/arsltech/COVID-19Tracker/blob/master/image1.jpg" width="200" height="400" />
<img src="https://github.com/arsltech/COVID-19Tracker/blob/master/image2.jpg" width="200" height="400" />
<img src="https://github.com/arsltech/COVID-19Tracker/blob/master/image3.jpg" width="200" height="400" />
</p>

# Short Description

The app fetches live data of Covid-19 across the world, it shows some useful tips related to Covid-19 such as symptoms and prevention tips
along with a chat-bot that tells whether a person have chances of having Covid-19 by asking them general questions regarding their health.
And the website acts as a tool that can be used to get help or offer help by sharing resources available with them. 

# What's the problem ?

Due to the Covid-19 outbreak mainly the poor ones are affected the most. It has been difficult for them to even have "food twice a day".
The supplies and help from the government are either not distributed properly or not reaching the right candidate. And also there is no 
proper way to communicate with the authorities or Get help from people who are willing to help. Because of the rapid increase in Covid-19
cases it's hard to track or get accurate/realtime data of cases all around. Most of the people are unaware of the symptoms and preventive
measures.

# How can technology help?

Currently people are disconnected from each others. The voices of needy people are not able to reach the concerned authorities.There are
people willing to help but they are not able to do so. In this scenario technology can bridge the gap between these people through
communication medias. Using technology we can provide a common platform for requesting or offering help and supplies. Also it can be
helpful to provide updated informations about the situation. It can help by assisting people to identify if they have the symptoms of
corona virus.

# The Idea

The idea is to help those in need by providing them with an app. The app will provide a common platform with the features like live data,
chat bot and useful informations regarding Covid-19 that may help in combating with the pandemic situation.

# Architecture


# Long Description

## Section 1 - Application

The android version of mobile application have some important features to offer. The app is built to help people in need and to provide
realtime update of the current situation.

### Section 1.1 - Chat-Bot
The Chat-Bot built using IBM's smart Watson Assistant helps the user to determine the possibility of having Corona virus symptoms by asking
some general health related questions. It also gives you Covid-19 related information like its symptoms and how to prevent it from spreading.
The chat-bot is a very intelligent and efficient tool to assist the user get the correct and useful information.

### Section 1.2 - Worldwide Data
The current live data of Covid-19 is shown through a piechart using rest API to get an overview of the stats along with other details. It also
have the country-wise data of Covid-19 which keeps updating every 10 minutes.

## Section 2 - Website

The website developed here is built using WordPress and hosted locally on my device. The website contains two major sections, 1) Donation and 
2) Requesting Help along with a registration process that every user should complete in order to proceed further.

### Section 2.1 - Donation
This section allows the user to mention the resources that he/she wants to donate for the needy people. The user have to first register providing
his/her details and then can proceed towards donation step.

### Section 2.2 - Requesting Help
This section is for the people who need help. Here they have to register first and then they can seek help by mentioning the resources he/she
needs.

## Section 3 - API used

We have used rest API to fetch real time data from "http://corona.lmao.ninja" which provides data in JSON format. The data that we receive is
converted to string format using volley library and its functions. The multi-source ("Johns Hopkins University", "The New York Times", 
"Worldometers" and "Apple reports") data on this site keeps updating in every 10 minutes.

# Project Road map

# Demo Video

https://youtu.be/Ij1JcJ7-unQ

# Live Video

https://youtu.be/MvX1LHZwwHM

# Built with

*IBM Watson Assistant along with
 Watson Text-to-Speech and Speech-to-Text 
*Android Studio
*JAVA
*Rest API and Volley library
*WordPress

# Team Details
*Team Name : X-Code
*Team Members: 1) Bishal Kumar Sah
                  samthom104@gmail.com
*Team Members: 2) Niranjan Yadav
                  niranjan2055@gmail.com
*Team Members: 3) Rohitashav Soni
                  sonirohitashav40@gmail.com
# Acknowledgement
We would like to thank International Business Machines (IBM) Corporation for providing us the opportunity to participate in the Call for Code
2020 Challenge. It was such a great experience to have interacted with the Hackathon co-ordinators and be able to use such amazing tools
provided by IBM.
We would also like to express our thanks to New Horizon College of Engineering, Bangalore for giving us exposure to such a great platform to
compete and make ourselves better.
