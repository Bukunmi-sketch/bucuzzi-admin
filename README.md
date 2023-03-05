## Bucuzzi Social!

## Introduction
- [Enatega] - Food Delivery Full App is food delivery full fledge solution for iOS, Android and Web for and analytics using
 . We have made sure that you get a good design for mobile and dashboard application and a
complete solution for you to easily implement this app for any restaurant application.
Enatega dashboard
Amplitude
with is used to build this application for mobile end. For dashboard panel React has
been used. Both mobile and web use . For State management and querying end points 
is used. The API is made using with .
React Native Expo
Graphql Apollo
Client Node Mongodb
It has all the features that you will ever need to implement this application for any restaurant or some kind of
food delivery application. Some of the features that are included in it are:
Push Notification for both Mobile and Web
Analytics Dashboard for Mobile app
Payment Integration for both Paypal and Stripe
Order tracking Feature
Email Integration -- Email is sent for some actions such as making Order
Rating and Review
Finding address using GPS integration
Facebook and Google Authentication integration
Mobile Responsive Dashboard
Multi Language Support using Localization
Separate Rider App for orders management
Multiple food variation items
We have made sure that the code is well structured and removed of unnecessary screens to make your
development life easier. It is also integrated with the following features so you could have an even better
development experience.
ESLint to provide you with linting capability in Javascript.
Prettier for code formatting
Jest for unit testing
Husky to prevent bad commits.
What will you have in Enatega Full App?
Enatega Mobile App
Enatega Rider App
Admin Web Dashboard
Application program interface server
Analytics Dashboard with Expo Amplitude
Enatega Technology Stack
Application program interface (API) server
NodeJS
MongoDB
ExpressJS
Stripe
Paypal
Nodemailer
Firebase(for push notification on web)
Express GraphQL
Mongoose(for mongodb)
Web Dashboard
React
GraphQL
Bootstrap
Firebase(for push notification on web)
Mobile App
React Native
Expo
Graphql
Amplitude
Native Base
Rider App
React Native
Expo
Graphql
Amplitude
Native Base
High Level Architecture
High Level Architecture
User Mobile App communicates with both API Server and Amplitudes analytics dashboard
Web dashboard communicates with only API Server
Rider App communicates with API Server
Installation
What Prerequisite knowledge do you need to run this app ?
Node
Express
React
React-Native
NPM
Git
Pre-Installed software
v6.0>=node<=v8.9.2 Download
v4.0>=npm<=v6.91
Prerequisite Credentials you need to obtain in order to run this
app
App Ids for Mobile App in app.json
Facebook Scheme
Facebook App Id
Facebook Display Name
iOS Client Id Google
Android Id Google
Amplitude Api Key
server url
Set credentials in API in file helpers/config.js and helpers/credentials.js
Email User Name
Password For Email
Mongo User
Mongo Password
Mongo DB Name
Reset Password Link
Admin User name
Admin Password
User Id
Name
Set credentials in Admin Dashboard in file src/index.js
Firebase Api Key
Auth Domain
Database Url
Project Id
Storage Buck
Messaging Sender Id
App Id
NOTE: Email provider has been only been tested for gmail accounts
How to deploy in local machine
Deploy Api-Server, Admin Web Dashboard, Mobile App and
Amplitude Dashboard for Analytics in Local machine
Installation Steps
Download Enatega full app and extract it
Open terminal in extracted folder
Api Server
1. run cd food-delivery-api in terminal
2. Set environment file (.env)
NODE_ENV=development
PORT=8000
CONNECTION_STRING={DB Connection string}
RESET_PASSWORD_LINK=http://localhost:{Admin Dashboard port
no}/auth/reset/?reset= SERVER_URL=http://{local network IP address}:{port
no}/ NOTIFICATION_ON_CLICK=http://{local network IP address}:{port
no}/dashboard
3. Create an account on mlab, then Create a database on mlab, copy connection string and paste it in
.env against the key CONNECTION_STRING . Read more about how to use mlab here
4. run npm install or yarn install to install packages
5. then run node index.js in terminal. look for messages in terminal for completion of seeding data.
Now run cd .. in terminal and follow next steps.
6. run npm start in terminal to start server
NOTE: For notifications to work on android you'll have to upload FCM token on expo server. Read
more about it here
Admin Web Dashboard
1. run cd food-delivery-admin in terminal
2. Install packages by npm install or yarn install
3. update server_url in /config/config.js if you are running API/Server on different url/port
4. run npm start
Mobile App
1. Go to folder food-delivery-app
2. Install packages by npm install or yarn install
3. update GRAPHQL_URL and WS_GRAPHQL_URL in /environment.js if you are running
API/Server on different url/port
4. Run the mobile app by npm start
5. Scan the QR code with the Expo app (Android) or the Camera app (iOS).
Rider App
1. Go to folder food-delivery-app
2. Install packages by npm install or yarn install
3. update GRAPHQL_URL and WS_GRAPHQL_URL in /environment.js if you are running
API/Server on different url/port
4. Run the mobile app by npm start
5. Scan the QR code with the Expo app (Android) or the Camera app (iOS).
Analytics Dashboard
1. Explore demo version on get amplitude key and replace it with amplitudeApiKey
in app.json of mobile app.
https://amplitude.com
2. You can further explore dashboard by following amplitude documentation.
https://developers.amplitude.com/
How to deploy in production
Deploy Api-Server, Admin Web Dashboard, Mobile App in
Production
Installation Steps
Download Enatega full app and extract it
Open terminal in extracted folder
Api Server
1. run cd food-delivery-api in terminal
2. Set environment file (.env)
NODE_ENV=production
PORT=8000
CONNECTION_STRING={DB Connection string}
RESET_PASSWORD_LINK=https://{Domain name}/auth/reset/?reset=
SERVER_URL=https://{Domain name}/
NOTIFICATION_ON_CLICK=https://{Domain name}/dashboard
3. Create an account on mlab, then Create a database on mlab, copy connection string and paste it in
.env against the key CONNECTION_STRING . Read more about how to use mlab here
4. run npm install or yarn install to install packages
5. run pm2 start app.js in terminal to start server
6. You can further read about how to make it public or how to map it on your domain here
https://www.digitalocean.com/community/tutorials/how-to-set-up-a-node-js-application-for-productionon-ubuntu-16-04
7. How To Secure Nginx with Let's Encrypt (SSL):
https://www.digitalocean.com/community/tutorials/how-to-secure-nginx-with-let-s-encrypt-on-ubuntu-16-
04
8. If you have a different environment and previous instructions dont work for your requirement you can let
us know we'll be happy to help you.
9. run this command in terminal on server chmod -R 777 food-delivery-api/* . This gives
permission to read/write files, it is needed to upload food,profile images on server
NOTE: For notifications to work on android you'll have to upload FCM token on expo server. Read
more about it here
Admin Web Dashboard
1. run cd food-delivery-admin in terminal
2. Install packages by npm install or yarn install
3. update server_url in /config/config.js with the ip/domain of where you hosted api in last
step
4. replace "homepage": " " in package.json with the url where you are going
to deploy your admin.
https://enatega.com/dashboard
5. run npm run build it will create a build folder. here we can publish in many ways but we are going
to mention one that we use if you want to know others you will find several tutorials on how to deploy
react applications for production.
6. copy build folder into your api folder
7. restart api server by pm2 restart <App Id> . App id can be found by running pm2 list
8. you can now access admin dashbaord on www.domain.com/dashboard
Mobile App
1. Go to folder food-delivery-app
2. Install packages by npm install or yarn install
3. Replace these keys in app.json with live keys. You can find more about these by clicking on each
key.
iosClientIdGoogle
androidClientIdGoogle
facebookAppId
amplitudeApiKey
stripePublicKey
stripeImageUrl; logo image url for store
stripeStoreName; store name
Analytics Dashboard
1. Explore demo version on get amplitude key and replace it with amplitudeApiKey
in app.json of mobile app.
https://amplitude.com
2. You can further explore dashboard by following amplitude documentation.
https://developers.amplitude.com/
FAQS
FAQs
How to override style in NativeBase?
How do I add events with the components?
How to customize components of NativeBase?
I want list of icons with their names used in NativeBase
How do I extract files in Windows?
How we can add other payment method?
Can we buy only specific parts of Enatega app backend? like api server etc.
How else can i use this product?
Does it support localization?
How to add other events in Amplitude?
How is the order tracked?
What is Amplitude dashboard?
How is payment Setup with Expo?
How to override style in NativeBase?
I didn't find a way to override style.
How can I include React StyleSheet into my app?
Solution:
is built on top of .
Hence with any component, you can pass the style property which will be merged into the default style of
that component.
Example:
NativeBase React Native
1 <Button style={{backgroundColor: '#FF0000'}}>
2 Click me!
3 </Button>
How do I add events with the components?
What events are available for the components?
Example buttons, list items etc.
Solution:
The components are built on top of components. Hence the callback events of
React Native holds good with NativeBase components.
Example: The Button component is actually a wrapper of the TouchableOpacity component of React
Native. So you can just use the onPress callback function for event handling.
Refer the for more details.
NativeBase React Native
cheatsheet
How to customize components of NativeBase?
I didn't find a way to customize the default styles of NativeBase components.
Solution:
provides a separate file inclusive of color schemes for all components.
Go through section of docs.
NativeBase
Customize
I want list of icons with their names used in NativeBase
Docs says Choose from 700+ Icons
I want the complete list of icons containing the name and image of the icons that are ready to use.
Solution:
NativeBase uses Icons from .
Hence the collection of icons from Vector Icons holds good with that in NativeBase.
React Native Vector Icons
How do I extract files in Windows?
I want to extract files in Windows.
Solution:
• Unzip the file.
• Right click on the extracted file and select View files.
All the files will be extracted.
How we can add other payment method ?
By default, we are providing you with the and , but you
can add payment method your choice .You need to change the logic in backend & the mobileApp's.
Stripe payment gateway Paypal payment gateway
Can we buy only specific parts of Enatega app backend? like api server etc.
No, we don't provide any specific part of the code base . As our code base is coupled with each other .
How else can i use this product?
You can use this app to build various other apps of same kind of variation for example instead of food you
can add any other item that you want for example food ordering app can be a rice ordering app by changing
names of items and images.
Does it support localization?
Yes, it supports localization or multi language support. Currently supported language on both mobile app
and web dashboard are English, German, French, Khmer and Chinese. More languages can be added on
request.
How to add other events in Amplitude?
In Mobile App you need to call Amplitude dashboard api for different variation of actions that you want.
How is the order tracked?
When an order is made the order notification is sent to admin dashboard from where he can accept or
cancel the order. The user is notified in the mobile app that is push notification.
What is Amplitude dashboard?
Amplitude dashboard gives you analytics for your mobile app, for the actions that you require. Right now
analytics will be shown for user created, user logged in and order placed but you can add as much actions
as you want.
How is payment Setup with Expo?
For Payments we have used two of the most popular Gateways Paypal and Stripe. For both payment
Gateways is used to integrate payment. Paypal and Stripe have been configured by us to support
multiple currencies dynamically that is currencies entered from Web Dashboard. They both function by
showing the user checkout page in a token is generated after the user performs payment
successfully that is in Stripe. In Paypal the process is different which is described in the links below.
WebView
WebView
https://medium.com/@adityasingh_32512/integrating-paypal-in-your-react-native-app-4dcf89e11dd
https://github.com/briansztamfater/expo-stripe-checkout
https://github.com/paypal/PayPal-node-SDK
https://github.com/stripe/stripe-node
License
License
Use of an item is bound by the license you purchase. A license grants you a non-exclusive and nontransferable right to use and incorporate the item into your personal or commercial projects. There are two
licenses available:
Single License
Your use of the item is restricted to a single installation (one iOS app and one Android app).
You may use the item in work which you are creating for your own purposes or for your client.
The item may not be redistributed or resold.
The source code may not be redistributed or resold. Though, the compiled app can be distributed in the
market.
If the item contains licensed components, those components must only be used within the item and you
must not extract and use them on a stand-alone basis.
If the item was created using materials which are the subject of a GNU General Public License (GPL),
your use of the item is subject to the terms of the GPL in place of the foregoing conditions (to the extent
the GPL applies).
Multiple License
Your use of the item is restricted to five installations (five iOS apps and five Android apps).
You may use the item in work which you are creating for your own purposes or for your clients.
The source code may not be redistributed or resold. Though, the compiled app can be distributed in the
market.
If the item contains licensed components, those components must only be used within the item and you
must not extract and use them on a stand-alone basis.
If the item was created using materials which are the subject of a GNU General Public License (GPL),
your use of the item is subject to the terms of the GPL in place of the foregoing conditions (to the extent
the GPL applies).
Unlimited License
You don't have any restriction for item installation (Unlimited iOS apps and Unlimited Android apps).
You may use the item in work which you are creating for your own purposes or for your clients.
The source code may not be redistributed or resold. Though, the compiled app can be distributed in the
market.
If the item contains licensed components, those components must only be used within the item and you
must not extract and use them on a stand-alone basis.
If the item was created using materials which are the subject of a GNU General Public License (GPL),
your use of the item is subject to the terms of the GPL in place of the foregoing conditions (to the extent
the GPL applies).
ChangeLog
Enatega React Native Food Delivery With Backend v5.0.1
New Features
Added rider tracking feature
Added a chat feature for support
Updated to the latest expo version
Complete revamp of rider app
Enatega React Native Food Delivery With Backend v5.0.0
New Features
Global generation of notifications added in admin dashboard
Rating and Reviews tab in admin dashboard
Pagination and sorting in admin dashboard
Signup flow has been changed
Order placing flow has been changed
Live updates for order placement has been made
Removed unnecessary features such as removing notifications, reviews from sidebar and Thank
you screen from app
Theme selection option in app
Updated to latest expo version
Enatega React Native Food Delivery With Backend v4.0.0
New Features
Code base changed to use React hooks
Updated React Navigation to 5.0
Updated Expo to 36
Enatega React Native Food Delivery With Backend v3.0.0
New Features
Revamped complete UI
Added coupons
Added filters and sorting
Added map in rider app for location of order
Enatega React Native Food Delivery With Backend v2.0.0
New Features
Added a separate Rider app
Added variation feature
Added analytics in dashboard
Small design changes in Customer app
API SERVER
Introduction
Enatega Backend
The Api-server that integrates with mobileApp and the adminDashboard uses the below technologies .
NodeJS
Express
MongoDB
Apollo
Node Mailer
Mongoose
Paypal
Firebase
Click here to know more.
Technologies
Technologies Used
The Backend process of Enatega Backend are built using the core components of Node, Express,
MongoDB, Apollo and Firebase. Enatega Backend has also been constantly incorporating various other
latest technologies.
MongoDB
Node JS
Express JS
Firebase
Graphql
Nodemailer
MongoDB
MongoDB is a document-oriented database designed with both scalability and developer agility in mind.
MongoDB's ability to store JavaScript objects natively saves time and processing power. Rather than storing
your data in tables and rows as you would with a relational database, in MongoDB you store JSON-like
documents with dynamic schemas. Instead of a domain-specific language like SQL, MongoDB utilizes a
simple JavaScript interface for querying. Looking up a document is as simple as passing a JavaScript object
that partially describes the search target.
NODE JS
Node JS is a packaged compilation of Google’s V8 JavaScript engine, the libuv platform abstraction layer,
and a core library, which is itself primarily written in JavaScript. Node JS shines in real-time web
applications employing push technology over web sockets. The main principle of Node JS: use nonblocking, event-driven I/O to remain lightweight and efficient in the face of data-intensive real-time
applications that run across distributed devices. It replaces the traditional request-response paradigm with a
fast, two-way communication model. It is asynchronous without the use of threads, it is not memoryintensive. Node JS web sockets run on TCP, not HTTP, so low-overhead client-server communication is
enabled in both directionS .
Ideally, if you are writing a mobile app, you want to cover all the bases – iOS, Android, and Windows – in
order to obtain maximum market share or to grant your mobile workforce flexibility in device choice. A
straightforward way to accomplish that is to write all the app’s logic in Node JS and place it on the backend.
The user interface then runs on the mobile device under another language.
Express JS
Express JS is server-side and mobile application framework, written in JavaScript. It builds single-page,
multi-page, and hybrid mobile and web apps; Common back-end functions for web applications; APIs.
Express JS is a prebuilt Node JS framework that can help you in creating server-side web applications
faster and smarter. Simplicity, minimalism, flexibility, scalability are some of its characteristics and since it is
made in Node JS itself, it inherited its performance as well.
In short, Express JS did for Node JS what Bootstrap did for HTML/CSS and responsive web design. It made
coding in Node JS a piece of cake and gave programmers some additional features to extend their serverside coding. Express JS is hands down the most famous Node JS framework - so much so that when most
people talk about Node JS they surely mean Node JS + Express JS.
Firebase
Firebase is a platform that offers various services for mobile and web applications and helps developers
build apps quickly with a lot of features.
To send the notifications, we have used the service called , which allows us to send
messages to any device using HTTP requests.
Cloud Messaging
is used for admin dashboard only while for mobile notification we have used built expo
api. To learn more about it .
Cloud Messaging
click here
GraphQL
GraphQL is a query language for APIs and a runtime for fulfilling those queries with your existing data.
GraphQL provides a complete and understandable description of the data in your API, gives clients the
power to ask for exactly what they need and nothing more, makes it easier to evolve APIs over time, and
enables powerful developer tools.
Send a GraphQL query to your API and get exactly what you need, nothing more and nothing less. GraphQL
queries always return predictable results. Apps using GraphQL are fast and stable because they control the
data they get, not the server.
GraphQL queries access not just the properties of one resource but also smoothly follow references
between them. While typical REST APIs require loading from multiple URLs, GraphQL APIs get all the data
your app needs in a single request. Apps using GraphQL can be quick even on slow mobile network
connections.
Nodemailer
Nodemailer is a module for Node.js applications to allow easy as cake email sending. The project got
started back in 2010 when there was no sane option to send email messages, today it is the solution most
Node.js users turn to by default.
Nodemailer is licensed under MIT license. See license details in the . If you are upgrading
from Nodemailer v2 or older, then see the light migration guide .
License page
here
Packages Json
Packages Used
1 {
2 "name": "enatega-api",
3 "version": "5.0.1",
4 "description": "enatega api",
5 "main": "app.js",
6 "scripts": {
7 "test": "echo \"Error: no test specified\" && exit 1",
8 "start": "node app.js",
9 "format": "prettier --write '**/*.js'",
10 "lint:fix": "eslint . --ext .js --fix"
11 },
12 "husky": {
13 "hooks": {
14 "pre-commit": "lint-staged"
15 }
16 },
17 "lint-staged": {
18 "*.js": [
19 "npm run format",
20 "npm run lint:fix"
21 ]
22 },
23 "dependencies": {
24 "apollo-server-express": "^2.12.0",
25 "bcryptjs": "^2.4.3",
26 "body-parser": "^1.19.0",
27 "consolidate": "^0.15.1",
28 "dataloader": "^1.4.0",
29 "dotenv": "^8.2.0",
30 "ejs": "^2.6.1",
31 "expo-server-sdk": "^3.2.0",
32 "express": "^4.16.4",
33 "express-graphql": "^0.7.1",
34 "firebase-admin": "^7.3.0",
35 "graphql": "^14.0.2",
36 "graphql-upload": "^8.0.4",
37 "http": "0.0.1-security",
38 "jsonwebtoken": "^8.4.0",
39 "mongoose": "^5.9.10",
40 "nodemailer": "^6.1.1",
41 "paypal-rest-sdk": "^1.8.1",
42 "stripe": "^7.0.1",
43 "tinify": "^1.6.0-beta.2",
44 "uuid": "^3.3.2"
45 },
46 "devDependencies": {
47 "nodemon": "^1.19.4",
48 "eslint": "^7.1.0",
49 "eslint-config-standard": "^14.1.1",
50 "eslint-plugin-import": "^2.20.2",
51 "eslint-plugin-node": "^11.1.0",
52 "eslint-plugin-promise": "^4.2.1",
53 "eslint-plugin-react": "^7.20.0",
54 "eslint-plugin-standard": "^4.0.1",
55
"husky": "^4.2.5",
55
56 "lint-staged": "^10.2.7",
57 "metro-react-native-babel-preset": "^0.54.1",
58 "prettier": "2.0.5",
59 "prettier-config-standard": "^1.0.1"
60 }
61 }
62
Outline
Initiating Server
npm start
Mongodb
We used which is a NoSql database. In the project we have configured it to used it with
which is used as cloud database for both local and production enviroment by default. You can create your
own mLab account and integrate it with your database by entering connectionstring in fooddelivery-api/app.js
Mongodb mLab
Express JS
Express JS contains all the configuration details related to node server. It performs the following tasks:
1. Create and start server
2. Add different middleware namely:
3.
bodyParser: Parse body params and attache them to req.body
Compress: Helps in decreasing the size of the response body and improve the speed of the API
calls.
Json web token: Helps in generating authentication token
GraphQL Routes
It handles the different GraphQL routes of the application, namely:
auth: This route contains different routes related to the user such as registration of the new user,
updating the user details, manages login and logout.
food: Manages food schema such as adding, deleting, editing and liking food.
Api Routes
It handles the different REST routes of the application, namely:
GraphQL: It handles all routes related to GraphQL.
Paypal: It handles when payment is made using Paypal.
Stripe: It handles when payment is made using Stripe.
Model Diagram
Enatega GraphQL Model Diagram
RootQuery
categories: [Category!]!
foods: [Food!]!
orders: [Order!]!
allOrders: [Order!]!
likedFood: [Food!]!
reviews: [ReviewOutput!]!
oodByCategory(category:String!): [Food!]!
profile: User!
configuration: Configuration!
users: [User!]
order(id:String!): Order!
Category
_id: ID!
title: String!
description: String
img_menu: String
img_header: String
is_active: Boolean
createdAt: String!
updatedAt: String
Food
_id: ID!
title: String!
description: String!
variations: [Variation!]!
likes: Int!
category: Category!
img_url: String!
liked: Boolean
is_active: Boolean!
createdAt: String!
updatedAt: String!
Order
_id: ID!
order_id: String!
delivery_address: String!
items: [Item!]!
user: User!
payment_method: String
paid_amount: Float
order_amount: Float
payment_status: String!
User
_id: ID
name: String
phone: String!
email: String!
password: String
payment_type: PaymentType!
card_information: CardInformation
location: Location
picture: String
likes: [Food!]!
orders: [Order!]!
Variation
_id: ID!
type: String!
price: Float!
Item
_id: ID!
food: Food!
quantity: Int!
variation: Int!
is_active: Boolean!
createdAt: String!
updatedAt: String! PaymentType
_id: ID!
name: String
is_active: Boolean!
createdAt: String!
updatedAt: String!
CardInformation
name: String!
credit_card_number: String!
expiration_date: String!
cvv: String!
Location
order_status: String!
review: Review
status_queue: OrderStatus
is_active: Boolean!
createdAt: String!
updatedAt: String!
ReviewOutput
_id: ID!
order_id: String!
review: Review!
is_active: Boolean!
createdAt: String!
updatedAt: String!
is_active: Boolean!
createdAt: String!
updatedAt: String!
Configuration
_id: String!
order_id_prefix: String
push_token: String
mongodb_url: String
email: String
password: String
enable_email: Boolean
Review
_id: ID!
order: Order!
rating: Int!
description: String
is_active: Boolean!
createdAt: String!
updatedAt: String!
OrderStatus
pending: String!
accepted: String
completed: String
cancelled: String
longitude: String!
latitude: String!
delivery_address: String
Routes
Routes
Routing refers to determining how an application responds to a client request to a particular endpoint, which
is a URI (or path) and a specific HTTP request method (GET, POST, and so on).
Each route can have one or more handler functions, which are executed when the route is matched.
Route definition takes the following structure:
app.METHOD(PATH, HANDLER)
Where:
app is an instance of express .
METHOD is an HTTP request method, in lowercase.
PATH is a path on the server.
HANDLER is the function executed when the route is matched.
Our server has only five routes
/graphql for graphql related routes
/paypal for paypal payment related routes
/stripe for stripe related routes
/ for send a static page enatega
/dashboard for sending the build of dashboard
Note
Majority of our functionality is handled through GraphQL only for some cases REST is used. You can find
more about it by checking Resolvers.
Queries Mutations and Fragments
Queries Mutations and Fragments
Queries
Fetching data in a simple, predictable way is one of the core features of . are used to
fetch data attach the result to your UI. In frontend mobile and dashboard we have written multiple
queries in mobile app located in food-delivery-app/src/apollo/client.js and fooddelivery-app/src/apollo/server.js in Dashboard Queries are located in food-deliveryadmin/src/apollo/server.js As an example look into food-deliveryapp/src/apollo/client.js and the constant getNotifications the query is written as
Apollo Client Queries
GraphQL
1 query GetNotifications{
2 notifications{
3 _id
4 order
5 status
6 }
7 }
On line 1 GetNotifications is the query name for the frontend while on line 2 notifications is the query
name for backend. The parameters written inside notifications are output parameters they will be returned by
the GraphQL endpoint.
Now let's take a look at another example this time we are going to pass some parameters as input to a
query. The constant foods is a simple example for this located at food-deliveryapp/src/apollo/server.js
1 query FoodByCategory($category:String!){
2 foodByCategory(category:$category){
3 _id
4 title
5 description
6 variations{
7 _id
8 type
9 price
10 }
11 category{_id}
12 img_url
13 likes
14 liked
15 }
16 }
On line 1 FoodByCategory is the query name for the frontend we are passing a String where it's
variable name is category $ sign is used for variable name while ! is used for required field. On line
2 foodByCategory is the query name for the backend
Resolvers
Resolvers
Resolver is a collection of functions that generate response for a GraphQL query. You can think of Resolvers
like Controllers from REST. It basically handlers GraphQL query just like controllers where the endpoint has
particular controller resolvers does the same thing but for query instead of an endpoint.
Lets take a look at one of an example in the project located at food-deliveryapi/graphql/resolvers/auth
1 createUser: async args => {
2 try {
3 const existingUser = await User.findOne({ email: args.userInput.email });
4 if (existingUser) {
5 throw new Error('email already registered.');
6 }
7 const hashedPassword = await bcrypt.hash(args.userInput.password, 12);
8 const picture = args.userInput.picture ? saveImageToDisk(args.userInput.picture) : '
9 const user = new User({
10 email: args.userInput.email,
11 password: hashedPassword,
12 phone: args.userInput.phone,
13 name: args.userInput.name,
14 picture: picture,
15 location: {
16 longitude: '',
17 latitude: '',
18 delivery_address: ''
19 }
20 });
21
22 const result = await user.save();
23 sendEmail(result.email, 'Account Creation', signupText, signupTemplate);
24 const token = jwt.sign(
25 { userId: result.id, email: result.email },
26 'somesupersecretkey'
27 );
28 console.log({ ...result._doc, userId: result.id, token: token, tokenExpiration: 1 })
29 return { ...result._doc, userId: result.id, token: token, tokenExpiration: 1 };
30 } catch (err) {
31 throw err;
32 }
33 }
createUser is one of the resolver functions it creates a new User just like in REST the parameter are
found in args you may have noticed that in line 3 we have to call another object inside args called
userInput this is the inputType for every query its a good practice to write its inputType the rest
of the code is pretty simple.
Auth Resolvers
Auth
File Name: auth.js
File Path: food-delivery-api/graphql/resolvers/auth.js
Auth Resolver handles queries related to User it handles creating user, login, updating location, updating
user, uploading user profile picture, handling user profile, handling admin login, getting all users, forgot
password functionality and password reset functionality.
createUser
GraphQL Type: Mutation
Input Type or Parameters: userInput
Name Type Required
phone String false
email String true
password String false
name String false
picture String false
Description: Creates a new User with above mentioned parameters. Once a user is registered an
account creation email is sent to the user. A token is also sent as a response with user id and user
information.
Response Input Type or Response: AuthData
Name Type
userId ID
token String
name String
phone String
email String
picture String
location Location
Location Input Type: Location
Name Type
longitude String
latitude String
delivery_address String
login
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
email String true
password String false
type String true
Description: Logins a User with email and password. type flag is used to check if the user is using
social auth for authentication for example google or facebook. The response is sent with AuthData
input type.
Response Input Type or Response: AuthData
Name Type
userId ID
token String
name String
phone String
email String
picture String
location Location
Location Input Type: Location
Name Type
longitude String
latitude String
delivery_address String
updateLocation
GraphQL Type: Mutation
Input Type or Parameters: Location
Name Type Required
longitude String true
latitude String true
Description: Updates location of the user called when user resets app as a response user information
is sent with location. User information is sent because update location is called every time app restarts.
You might be wondering how did we get user data with this input parameters the reason is the app is
configured with header parameters where a middleware is written to get user object from header
authentication token. This middleware can be found at food-delivery-api/middleware/isauth.js
Response Input Type or Response: User data and input type Location
Name Type
_id String
name String
phone String
email String
location Location
picture String
Location Input Type: Location
Name Type
longitude String
latitude String
delivery_address String
updateUser
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
name String true
phone String true
delivery_address String true
Description: Updates User information
Response Input Type or Response: AuthData
Name Type
name ID
phone String
delivery_address Location
Location Input Type: Location
Name Type Required
longitude String true
latitude String true
delivery_address String false
uploadPicture
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
Upload Scalar true
Description: Uploads User profile picture in the settings screen the type for Upload is Scalar you can
learn more about it by clicking here.
Response Input Type or Response: Input type User only picture field is queried from User
Name Type
picture String
profile
GraphQL Type: Query
Input Type or Parameters: No user parameters is needed as auth token is sent on every request
Description: Gets User profile.
Response Input Type or Response: AuthData
Name Type
name ID
phone String
email String
location Location
picture String
Location Input Type: Location
Name Type Required
longitude String true
latitude String true
delivery_address String false
adminLogin
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
email String true
password String true
Description: Login resolver for admin dashboard
Response Input Type or Response: Type Admin
Name Type
userId ID
name String
email String
token String
pushToken
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
token String true
Description: When a token is sent user data can be queried
Response Input Type or Response: User
Name Type
_id ID
name String
phone String!
email String!
password String
payment_type PaymentType!
card_information CardInformation
location Location
picture String
likes [Food!]!
orders [Order!]!
is_active Boolean!
createdAt String!
updatedAt String!
users
GraphQL Type: Query
Input Type or Parameters:
Description: All the users are retrieved queried from admin panel
Response Input Type or Response: [User]
Name Type
_id ID
name String
phone String
email String
password String
payment_type PaymentType
card_information CardInformation
location Location
picture String
likes [Food!]!
orders [Order!]!
is_active Boolean
forgotPassword
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
email String true
Description: Sends a link with forgot password token in email to user
resetPassword
GraphQL Type: Mutation
Input Type or Parameters
Name Type Required
password String true
token String true
Description: Changes user password by verifying the token first
Category Resolver
Category
File Name: category.js
File Path: food-delivery-api/graphql/resolvers/category.js
This Resolver is used for managing categories mainly for web dashboard use. CRUD operations are
performed over here namely creating category, fetching categories, editing categories and deleting
categories.
createCategory
GraphQL Type: Mutation
Input Type or Parameters: categoryInput
Name Type Required
_id String false
title String true
description String true
img_menu Upload false
img_header Upload false
Description: Creates a category with img menu for the image for menu screen and img header for the
menu items screen
Response Input Type or Response: Category!
Name Type
_id ID
token String
title String
description String
img_menu String
img_header String
is_active Boolean
categories
GraphQL Type: Query
Input Type or Parameters Not needed
Description: Fetches all the categories
Response Input Type or Response: [Category!]!
Name Type
_id ID
title String
description String
img_menu String
img_header String
is_active String
editCategory
GraphQL Type: Mutation
Input Type or Parameters: CategoryInput
Name Type Required
_id String false
title String true
description String true
img_menu Upload false
img_header Upload false
Description: Edits category for given _id.
Response Input Type or Response: Category!
Name Type
_id ID
title String
description String
img_menu String
img_header String
is_active String
deleteCategory
GraphQL Type: Mutation
Input Type or Parameters: id
Name Type Required
id String true
Description: Deletes Category for given id deleting doesn't delete it from database but only sets the
is_active flag to false
Response Input Type or Response: Category!
Name Type
_id ID
title String
description String
img_menu String
img_header String
is_active String
Configuration Resolver
Configuration
File Name: configuration.js
File Path: food-delivery-api/graphql/resolvers/configuration.js
This Resolver is used for saving configurations mainly used by web dashboard. It contains getting
configuration saving order configuration, saving email configuration, saving MongoDb configuration,
Uploading token saving Paypal configuration saving stripe configuration and saving delivery configuration
configuration
GraphQL Type: Query
Input Type or Parameters: NULL
Description: Gets all the existing configuration.
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
saveOrderConfiguration
GraphQL Type: Query
Input Type or Parameters OrderConfigurationInput!
Name Type Required
order_id_prefix String true
Description: Sets the prefix for order id.
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
saveEmailConfiguration
GraphQL Type: Mutation
Input Type or Parameters: EmailConfigurationInput!
Name Type Required
email String true
password String true
enable_email String true
Description: Configuration is made for email input enabled_email true or false is for use case if
unnecessary sending emails are not required mainly in test environment.
Response Input Type or Response: Configuration!
Name Type
id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
saveMongoConfiguration
GraphQL Type: Mutation
Input Type or Parameters: MongoConfigurationInput!
Name Type Required
mongodb_url String true
Description: Saves MonoDb connection string url.
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
uploadToken
GraphQL Type: Mutation
Input Type or Parameters: String!
Name Type Required
pushToken String true
Description: Saves the pushToken String for configuring push notifications.
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
savePaypalConfiguration
GraphQL Type: Mutation
Input Type or Parameters: PaypalConfigurationInput!
Name Type Required
client_id String true
client_secret String true
sandbox Boolean true
Description: Saves Configuration for Paypal
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
saveStripeConfiguration
GraphQL Type: Mutation
Input Type or Parameters: StripeConfigurationInput!
Name Type Required
publishable_key String true
secret_key String true
Description: Saves configuration for Stripe
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
saveDeliveryConfiguration
GraphQL Type: Mutation
Input Type or Parameters: DeliveryConfigurationInput!
Name Type Required
delivery_charges Float true
Description: Saves the charges for delivery.
Response Input Type or Response: Configuration!
Name Type
_id String
order_id_prefix String
push_token String
mongodb_url String
email String
password String
enable_email Boolean
client_id String
client_secret String
sandbox Boolean
publishable_key String
secret_key String
delivery_charges Float
Food Resolver
Food
File Name: food.js
File Path: food-delivery-api/graphql/resolvers/food.js
This Resolver is used to handle all food related queries such as fetching all the food items, fetching food
item by category, creating food item, liking food item, liked food items, editing food items and deleting food
items.
foods
GraphQL Type: Query
Input Type or Parameters: NULL
Description: Gets all the food items
Response Input Type or Response: [Food!]!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is_active Boolean!
foodByCategory
GraphQL Type: Query
Input Type or Parameters String!
Name Type Required
category String true
Description: Gets all the food items for category id.
Response Input Type or Response: [Food!]!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is_active Boolean!
createFood
GraphQL Type: Mutation
Input Type or Parameters FoodInput!
Name Type Required
_id String false
title String true
description String true
category String true
img_url Upload false
variations [VariationInput!]! true
Description: Creates a food item with the following parameters, variations of a food is for example
small, medium, large
Response Input Type or Response: Food!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is active Boolean!
likeFood
GraphQL Type: Query
Input Type or Parameters FoodInput!
Name Type Required
foodId String true
Description: Likes the food with id.
Response Input Type or Response: Food!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is_active Boolean!
likedFood
GraphQL Type: Query
Input Type or Parameters NULL
Description: Returns all liked food by user
Response Input Type or Response: [Food!]!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is_active Boolean!
editFood
GraphQL Type: Mutation
Input Type or Parameters: FoodInput
Name Type Required
_id String false
title String true
description String true
category String true
img_url Upload false
variation [VariationInput!]! true
Description: Gets all the food items for category id.
Response Input Type or Response: Food!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is_active Boolean!
deleteFood
GraphQL Type: Mutation
Input Type or Parameters String!
Name Type Required
id String true
Description: Deletes the food item with the id.
Response Input Type or Response: Food!
Name Type
_id ID
title String!
description String!
variations [Variations!]!
email String
likes Int
img_url String!
liked Boolean
is_active Boolean!
Order Resolver
Order
File Name: order.js
File Path: food-delivery-api/graphql/resolvers/order.js
This Resolver is used to handle all order related queries. For example getting a single order, getting all
orders of the user, getting all order in the database, placing an order, editing an order, canceling an order,
updating order status, giving rating and review to an order, getting all reviews of the user.
order
GraphQL Type: Query
Input Type or Parameters: String!
Name Type Required
id String true
Description: Gets the order for particular id
Response Input Type or Response: Order!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is_active Boolean!
orders
GraphQL Type: Query
Input Type or Parameters: NULL
Description: Gets the order of particular user
Response Input Type or Response: [Order!]!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is_active Boolean!
allOrders
GraphQL Type: Query
Input Type or Parameters: NULL
Description: Gets the orders of all Users.
Response Input Type or Response: [Order!]!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is_active Boolean!
placeOrders
GraphQL Type: Mutation
Input Type or Parameters: [OrderInput!]!, paymentMethod:String
Name Type Required
food String true
quantity Int true
variation Int true
Description: Gets all the orders of a particular User
Response Input Type or Response: Order!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is active Boolean!
editOrder
GraphQL Type: Mutation
Input Type or Parameters: _id:String! and [OrderInput!]!
Name Type Required
food String true
quantity Int true
variation Int true
Description: Edits Order of particular _id with given OrderInput parameters
Response Input Type or Response: Order!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is_active Boolean!
cancelOrder
GraphQL Type: Mutation
Input Type or Parameters: OrderId:String!
Name Type Required
OrderId String true
Description: Sets the order status to cancel
Response Input Type or Response: Order!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is_active Boolean!
updateOrderStatus
GraphQL Type: Mutation
Input Type or Parameters: orderId:String! and status:String!
Name Type Required
orderId String true
status String true
Description: Changes the status of the order done from admin panel which sends a push notification to
mobile app
Response Input Type or Response: Order!
Name Type
_id ID
order_id String!
delivery_address String!
items [Item!]!
user User!
payment_method String
paid_amount Float
payment_status String!
order_status String!
review Review
status_queue OrderStatus
is_active Boolean!
reviewOrder
GraphQL Type: Mutation
Input Type or Parameters: reviewInput!
Name Type Required
orderId String true
rating Int true
description String false
Description: Gives review to a order
Response Input Type or Response: Review!
Name Type
_id ID
order Order!
rating Int!
description String
is_active Boolean!
reviews
GraphQL Type: Query
Input Type or Parameters: NULL
Description: Gets all the reviews of the user
Response Input Type or Response: [ReviewOutput!]!
Name Type
_id ID!
order_id String!
review Review!
is_active Boolean!
ADMIN WEB DASHBOARD
Introduction
Enatega Web Dashboard
The ideal starter kit / app script with all the needed UI elements along with:
React
GraphQL
Bootstrap
Click here to know more.
Technologies
Technologies Used
The Web dashboard of Enatega App is built using the core components of ReactJS, React-bootstrap,
Socket.IO. Enatega App web dashboard is also been constantly incorporating various other latest
technologies.
ReactJs
React-Router
React Strap
ReactJS
React (sometimes styled React.js or ReactJS) is a JavaScript library for building user interfaces. It is
maintained by Facebook, Instagram and a community of individual developers and corporations. React
allows developers to create large web-applications that use data and can change over time without
reloading the page. It aims primarily to provide speed, simplicity, and scalability. React processes only user
interfaces in applications.
React-Router
React Router is a collection of navigational components that compose declaratively with your application.
Whether you want to have bookmarkable URLs for your web app or a composable way to navigate in React
Native, React Router works wherever React is rendering .
React-Strap
React-Bootstrap is a library of reusable front-end components. You'll get the look-and-feel of Twitter
Bootstrap, but with much cleaner code, via Facebook's React.js framework.
Packages Json
Packages Used
1 {
2 "name": "enatega-dashboard",
3 "version": "5.0.1",
4 "description": "Enatega dashboard",
5 "main": "index.js",
6 "homepage": "https://enatega.com/dashboard",
7 "scripts": {
8 "start": "react-scripts start",
9 "build": "react-scripts build",
10 "test": "react-scripts test",
11 "eject": "react-scripts eject",
12 "install:clean": "rm -rf node_modules/ && rm -rf package-lock.json && npm install && np
13 "compile-sass": "node-sass src/assets/scss/argon-dashboard-react.scss src/assets/css/a
14 "minify-sass": "node-sass src/assets/scss/argon-dashboard-react.scss src/assets/css/arg
15 "map-sass": "node-sass src/assets/scss/argon-dashboard-react.scss src/assets/css/argon16 "lint:fix": "eslint . --ext .js,.jsx --fix",
17 "format": "prettier --write '**/*.{js,jsx}'"
18 },
19 "husky": {
20 "hooks": {
21 "pre-commit": "lint-staged"
22 }
23 },
24 "lint-staged": {
25 "*.js": [
26 "npm run format",
27 "npm run lint:fix"
28 ]
29 },
30
"browserslist": [
30
31 ">0.2%",
32 "not dead",
33 "not ie <= 11",
34 "not op_mini all"
35 ],
36 "dependencies": {
37 "apollo-boost": "^0.3.1",
38 "apollo-link-ws": "^1.0.19",
39 "apollo-upload-client": "^10.0.0",
40 "chart.js": "2.7.3",
41 "classnames": "2.2.6",
42 "firebase": "^7.14.2",
43 "graphql": "^14.2.1",
44 "i18next": "^15.1.3",
45 "i18next-browser-languagedetector": "^3.0.1",
46 "lodash.orderby": "^4.6.0",
47 "moment": "2.24.0",
48 "node-sass": "^4.12.0",
49 "nouislider": "13.1.1",
50 "react": "16.8.4",
51 "react-apollo": "^2.5.4",
52 "react-bootstrap-typeahead": "^3.4.5",
53 "react-chartjs-2": "2.7.4",
54 "react-copy-to-clipboard": "5.0.1",
55 "react-data-table-component": "6.9.0",
56 "react-datetime": "2.16.3",
57 "react-dom": "16.8.4",
58 "react-google-maps": "9.4.5",
59 "react-i18next": "^10.10.0",
60 "react-loader-spinner": "3.1.14",
61 "react-router-dom": "4.3.1",
62 "react-scripts": "2.1.8",
63 "reactstrap": "7.1.0",
64 "styled-components": "5.1.0",
65 "subscriptions-transport-ws": "^0.9.16",
66 "validate.js": "^0.12.0"
67 },
68 "devDependencies": {
69 "@types/googlemaps": "3.30.18",
70 "@types/markerclustererplus": "2.1.33",
71 "@types/react": "16.8.7",
72 "typescript": "3.3.3333",
73 "eslint": "^7.1.0",
74 "eslint-config-standard": "^14.1.1",
75 "eslint-plugin-import": "^2.20.2",
76 "eslint-plugin-node": "^11.1.0",
77 "eslint-plugin-promise": "^4.2.1",
78 "eslint-plugin-react": "^7.20.0",
79 "eslint-plugin-standard": "^4.0.1",
80 "husky": "^4.2.5",
81 "lint-staged": "^10.2.7",
82 "prettier": "2.0.5",
83
"prettier-config-standard": "^1.0.1"
83
84 }
85 }
86
87
88
Folder Structure
Folder Structure
Folder layout of Web Dashboard
Components
Dashboard Folder Structure
Assets folder
Overview
We have used for building the web dashboard. It comes with boiler plate code.
We have modified to add (graphQL). You can read more about it by referring to this .
Aragon Dashboard React
Apollo doc
Customize
Theming Your App
Customizing the App will be a cakewalk for you. That is due to the fact, we provide you well prepared code
shape. This makes it quite simple to be able to dig through the code and hence without problems
customizable.
The theme has categorized its screens into different sections.
The theme has a separate file inclusive of color schemes for different sections.
The theme strictly follows programming ethics, hence modifying logo at different locations for your app
becomes very simple.
The theme also allows you to customize name for your app.
Change Components Color
Customizing the color of app is an easy task. Just go to
src/assets/scss/custom/_variables.scss .In the file there is field called brand primary
,changing the paramenter of this field will change the color of your components
SCSS is used for styling components it's a CSS style pre-processor that is more powerful than CSS.
Change App Icon
To change the app icon you just need to go to src/assets/img/brand/logo.png and put the
icon you want in the folder .Your app icon will be changed.
CUSTOMER APP
Introduction
Enatega Mobile App
Based on , and , we offer you Enatega Food Delivery Full App; a well
structured iOS and Android, having fully customizable pages along-with a rich collection of UI elements
specifically for an ideal taxi app to help you quickly get started on your next project.
React Native NativeBase Expo
is a free and open source framework that enables developers to build high-quality mobile apps
using iOS and Android apps with a fusion of ES6. NativeBase builds a layer on top of
that provides you with basic set of components for mobile application development.
Native Base
React Native React
Native
is used to make react native applications. It provides a set of tools that simplify the development and
testing of React Native app and arms you with the components of users interface and services that are
usually available in third-party native React Native components. With Expo you can find all of them in Expo
SDK.
Expo
Enatega Food Delivery Full App is a bold and flexible theme best suited for developing highquality mobile apps that makes use of ready-made tools. The theme has several widget areas that allows
you to extend your theme functionality with plugins. Enatega is built using and is
performance optimized which helps you to develop world-class application experiences on native platforms.
This gives your app a consistent look and feel with the rest of the platform ecosystem, and keeps the quality
bar high.
React Native
Apollo GraphQL
Enatega is build using it is powered with to give you access to your device capabilities
and the Expo services to handle the heavy lifting of building your app binary and uploading it to the store, all
without you touching Xcode or Android Studio. With the "bare" workflow, we also speed up your
development with the and React Native, and you have full control over your iOS and Android
projects.
Expo Expo SDK
Expo SDK
Folder Structure
Mobile App Folder Structure
Mobile App has been integrated with
ESLint to provide you with linting capability in Javascript.
Prettier for code formatting
Jest for unit testing
Husky to prevent bad commits.
Packages Json
Packages Used
1 {
2 "name": "enatega-full-app",
3 "version": "5.0.1",
4 "main": "node_modules/expo/AppEntry.js",
5 "scripts": {
6 "start": "expo start",
7 "android": "expo start --android",
8 "ios": "expo start --ios",
9 "eject": "expo eject",
10 "test": "jest",
11 "format": "prettier --write '**/*.js'",
12 "lint:fix": "eslint . --ext .js --fix"
13 },
14 "husky": {
15 "hooks": {
16 "pre-commit": "lint-staged"
17 }
18 },
19 "lint-staged": {
20 "*.js": [
21 "npm run format",
22 "npm run lint:fix"
23 ]
24 },
25 "dependencies": {
26 "@apollo/react-hooks": "^3.1.3",
27 "@expo/vector-icons": "^10.0.0",
28 "@ptomasroos/react-native-multi-slider": "^2.2.0",
29 "@react-native-community/masked-view": "0.1.10",
30 "@react-navigation/drawer": "^5.5.0",
31 "@react-navigation/native": "^5.1.6",
32
"@react-navigation/stack": "^5.2.11", 33 "apollo-boost": "^0.3.1",
34 "apollo-cache-inmemory": "^1.5.1",
35 "apollo-cache-persist": "^0.1.1",
36 "apollo-client": "^2.5.1",
37 "apollo-link-context": "^1.0.17",
38 "apollo-link-http": "^1.5.14",
39 "apollo-link-state": "^0.4.2",
40 "apollo-link-ws": "^1.0.20",
41 "apollo-upload-client": "^10.0.0",
42 "expo": "^38.0.0",
43 "expo-analytics-amplitude": "~8.2.1",
44 "expo-app-auth": "~9.1.1",
45 "expo-apple-authentication": "~2.2.1",
46 "expo-application": "~2.2.1",
47 "expo-constants": "~9.1.1",
48 "expo-device": "~2.2.1",
49 "expo-facebook": "~8.2.1",
50 "expo-font": "~8.2.1",
51 "expo-google-app-auth": "^6.0.0",
52 "expo-image-picker": "~8.3.0",
53 "expo-linking": "^1.0.1",
54 "expo-localization": "~8.2.1",
55 "expo-location": "~8.2.1",
56 "expo-permissions": "~9.0.1",
57 "graphql": "^14.5.8",
58 "graphql-tag": "^2.10.1",
59 "i18n-js": "^3.2.2",
60 "react": "16.11.0",
61 "react-apollo": "^2.5.8",
62 "react-native": "https://github.com/expo/react-native/archive/sdk-38.0.0.tar.gz",
63 "react-native-flash-message": "^0.1.15",
64 "react-native-gesture-handler": "~1.6.0",
65 "react-native-maps": "0.27.1",
66 "react-native-material-textfield": "github:n4kz/react-native-material-textfield#pull/28
67 "react-native-modal": "^11.5.4",
68 "react-native-reanimated": "~1.9.0",
69 "react-native-safe-area-context": "~3.0.7",
70 "react-native-screens": "~2.9.0",
71 "react-native-star-rating": "^1.1.0",
72 "react-native-svg": "12.1.0",
73 "react-native-timeline-flatlist": "^0.7.2",
74 "react-native-webview": "9.4.0",
75 "subscriptions-transport-ws": "^0.9.16",
76 "uuid": "^3.3.2",
77 "validate.js": "^0.12.0"
78 },
79 "devDependencies": {
80 "babel-jest": "^24.8.0",
81 "babel-preset-expo": "^8.2.3",
82 "babel-preset-react-native": "^4.0.1",
83 "eslint": "^7.1.0",
84 "eslint-config-standard": "^14.1.1",
85
"eslint-plugin-import": "^2.20.2",
85
86 "eslint-plugin-node": "^11.1.0",
87 "eslint-plugin-promise": "^4.2.1",
88 "eslint-plugin-react": "^7.20.0",
89 "eslint-plugin-standard": "^4.0.1",
90 "husky": "^4.2.5",
91 "jest": "^24.8.0",
92 "jest-react-native": "^18.0.0",
93 "lint-staged": "^10.2.7",
94 "metro-react-native-babel-preset": "^0.54.1",
95 "prettier": "2.0.5",
96 "prettier-config-standard": "^1.0.1",
97 "react-test-renderer": "^16.8.6"
98 },
99 "jest": {
100 "preset": "react-native",
101 "transformIgnorePatterns": [
102 "node_modules/(?!(react-native|expo|@expo|apollo-boost|apollo-cache-inmemory|apollo-c
103 ]
104 },
105 "private": true
106 }
107
108
Technologies Used
The components of the App are built using the core components of and . The
theme also constantly incorporates various other latest technologies.
React Native NativeBase
React Native
NativeBase v2.x
Expo
React Navigation
Apollo GraphQL
React Native
React Native helps in making the development work easier and allowing the developers to focus on the core
app features in every new release. It is the fastest-developing mobile app development that essentially
permits you to create an isolated product with often outcomes. The hymn of React Native — learn once,
write anywhere. React Native takes charge of the view controllers and programatically generates native
views using javascript. This means that you can have all the speed and power of a native application, with
the ease of development that comes with React.
NativeBase
NativeBase is an open source framework from the team of . This framework enable developers
to build high-quality mobile apps using iOS and Android apps with a fusion of .
NativeBase builds a layer on top of React Native that provides you with basic set of components for mobile
application development. The applications stack of components is built using native UI components and
because of that, there are no compromises with the User Experience of the applications. NativeBase is
targeted specially on the look and feel, and UI interplay of your app. NativeBase without a doubt fits in well
with mobile applications which cut downs one huge part of your app - The Front end.
StrapMobile
React Native ES6
Quick links to NativeBase
GitHub
NativeBase Components
Documentation
Blogs
Expo
is used to make react native applications. It provides a set of tools that simplify the development and
testing of React Native app and arms you with the components of users interface and services that are
usually available in third-party native React Native components. With Expo you can find all of them in Expo
SDK.
Expo
Enatega is build using it is powered with to give you access to your device capabilities
and the Expo services to handle the heavy lifting of building your app binary and uploading it to the store, all
without you touching Xcode or Android Studio. With the "bare" workflow, we also speed up your
development with the and React Native, and you have full control over your iOS and Android
projects.
Expo Expo SDK
Expo SDK
React Navigation
React Navigation is used for routing and navigation in React Native apps. Navigator has some common
elements which Enatega uses.
Drawer Navigator
Its used to make a drawer when a user swipes from left to right or presses the drawer icon
Stack Navigator
Stack Navigator stacks screens on top of each other and only one screen is shown at a time
Switch Navigator
Switch Navigator is used for the authentication flow inside application. Currently no authentication
happens in Enatega but for good practice all routing related to authentication is made using this
Apollo GraphQL
GraphQL is a substitute for REST architecture modern applications aren't fit for REST. The reason is the
point-to-point nature of , a procedural API technology, forces the authors of services and clients to
coordinate each use case ahead of time. When frontend teams must constantly ask backend teams for new
endpoints, often with each new screen in an app, development is dramatically slowed down. Both teams
need to move fast independently.
REST
For Application level state management conventionally is used but in our app we have used
built in state management. The problem with is too much boiler code which bloats code and has a
strong learning curve for new user. Since we are already using for replacement to without
using any third party state management libraries we have used it's built in State management provided by
Apollo Client. Our application is a medium size application and works very well with it.
Redux Apollo's
Redux
Apollo REST
Guide
Start Building Your App
Start Building Your App
Contents discussed in this section:
How to add new Screen?
How to add new Stylesheet?
How to add new Screen
Create a new folder, say NewScreen and place in under ` /src/screens/ .
Create a new file NewScreen.js ,whitin this folder.
Name the class same as that of folder name.
class NewScreen extends React.Component {
. . .
. . .
}
How to add new Stylesheet
Create a new file styles.js , place it under /src/screens/NewScreen .
import newly created StyleSheet into the Component.
import styles from './styles';
class NewScreen extends React.Component {
. . .
. . .
}
Customize
Theming Your App
Making changes in the app that you want is much simpler. It's designed in a way to handle changes and to
make the whole process easier.
The theme has separate file inclusive of colour schemes for the whole app.
The theme allows you to change name, logo and splash screen of the app
The theme has separate screens so making changes in one screen would not effect other screen
Change App Colors
To customise the colour scheme for the app you need to make changes in one file only
src/utils/colors.js set the colours that you require in this file it should reflect throughout the app.
Change Icon and Splash image
Expo
With changing the app icon is much easier. You need to replace the icon inside
assets/icons.png similarly if you want to change the splash screen you need to replace the image
in assets/splash.png with your own image.
Expo
Rename App
Expo
Renaming app name is pretty straight forward just replace the name attribute inside package.json
Changing the URL name for publishing with Expo
To change the App name for the Expo url, you just need to rename the slug attribute in app.json
file.
Components
Components
App
Register
Login
Menu
MenuItems
ItemDetail
Cart
Payment
MyOrders
Settings
Notifications
OrderDetail
App
Location: The UI can be found under src/App.js
Working: Configures Native base, Fonts, Push Notification, Apollo, Authentication and Navigation.
Result: Everything is configured loads the next view depending on if the user is authenticated or not. If
the user is not authenticated will show tutorial screen first else it will show Menu Screen.
Register
Location: The UI can be found under src/screens/Register/Register.js Its can be
found under src/apollo/server.js with constant createUser
mutation
Working: Registers User using Google, Facebook or Manual Registration
Result: Registers User if a user registers with Facebook or Google will get their picture too
automatically. In any selected option an auth token is generated on backend and sent backend to
frontend.
Login
Location: The UI can be found under src/screens/Login/Login.js Its can be found
under src/apollo/server.js with constant login
mutation
Working: Logins User using Google, Facebook or Manual Registration. A separate component for
ForgotPassword is also present its component can be found src/components/ForgotPassword
Its mutation can be found under src/apollo/server.js with constant forgotPassword
Result: Logins User with validation. If a user uses forgotPassword an email will be sent to him with reset
link for changing his/her password.
Menu
Location: The UI can be found under src/screens/Menu/Menu.js Its can be found under
src/apollo/server.js with constant categories
query
Result: Fetches categories of the items
MenuItems
Location: The UI can be found under src/screens/MenuItems/MenuItems.js Its mutations and
queries can be found under src/apollo/server.js with constant foods and
src/apollo/client.js with constants foodItem and getCartItems
Working: apollo is divided into two main files server.js and client.js The first file is used to
interact with the api server while the second is used for internal application level state management.
Constants foods and getCartItems is a query while foodItem is a fragment.
Result: foods is queried with the selected category in the previous screen. If a user clicks add button
inside the MenuItems screen foodItem is executed which also updated query
getCartItems which updated the quantity inside cart item as well as the adds the food item if it
exists previously will only update its quantity.
fragment
ItemDetail
Location: The UI can be found under src/screens/ItemDetail/ItemDetail.js Its mutations
and queries can be found under src/apollo/server.js with constant like and
src/apollo/server.js with constant foodItems and getCartItems
Working: Constants foodItems and getCartItems have been described above like is a
mutation which adds it to like food with parameter food id.
Cart
Location: The UI can be found under src/screens/Cart/Cart.js It has Apollo constants of
getCartItems and getProfile . getProfile is located at src/apollo/client.js
Working: Constant getProfile is a type of query that gets user details name, email, phone, location
and picture.
Result: The getProfile is used to get the user delivery location.
Payment
Location: The UI can be found under src/screens/Payment/Payment.js It has Apollo
constants placeOrder and getCartItems . placeOrder is located at
src/apollo/server.js Its a mutation. Working: Constant placeOrder send the details to the server with item delivery address payment
status and user profile.
Result: User payment is made by selecting either Paypal or Stripe. If the selected option is Cash on
delivery payment is not made and the status of the payment is still pending. Its status is changed from
the admin panel. An email is also sent to the user with the order detail information.
MyOrders
Location: The UI can be found under src/screens/MyOrders/MyOrders.js It has Apollo
constant of myOrders located at src/apollo/server.js its of type query
Result: All the users orders are queried with an option to reorder it for the user.
Settings
Location: The UI can be found under src/screens/Settings/Settings.js It has Apollo
constants of updateUser , uploadPicture , profile and getProfile . Constants
updateUser , uploadPicture and profile are located in src/apollo/server.js while
constant getProfile is located at src/apollo/client.js
Working: updateUser is of type mutation where the user information is updated. uploadPicture
is of type mutation where the users profile pic is updated on server. profile is of type query where
the user profile is queried.
Result: User profile is updated with image uploaded. All the fields in settings are required to place order.
Notifications
Location: The UI can be found under src/screens/Notifications/Notifications.js It has
Apollo constants of getNotifications its of type query located in src/apollo/client.js
Results: getNotifications gets all the notification that the user has notification are generated
when the order status is changed from admin panel.
OrderDetail
Location: The UI can be found under src/screens/OrderDetail/OrderDetail.js It has
Apollo constants of orderItem its of type fragment located in src/apollo/client.js
Working: orderItem has all the details for item as well as the status of the order based on the status
the timeline is rendered dynamically
RIDER APP
Introduction
Enatega Rider App
Enatega Rider App is a companion app for Enatega Food Delivery Full App. We made a rider app to
provide full end to end service to customer. Enatega Rider App uses the same technologies as in the
Customer App that is React Native, NativeBase and Expo.
Main functionalities of the Rider App is a rider can be created from the admin panel. The rider is assigned an
order from the . The Rider is shown order detail for each particular assigned order. It shows
order complete details such as variations and its total amount. Order status can be changed by the rider to
"PICKED" and "DELIVERED"
admin panel
Folder Structure
Rider App Folder Structure
Rider App has been integrated with
ESLint to provide you with linting capability in Javascript.
Prettier for code formatting
Jest for unit testing
Husky to prevent bad commits.
Packages Json
Packages Used
1 {
2 "name": "Enatega Rider",
3 "version": "5.0.1",
4 "main": "node_modules/expo/AppEntry.js",
5 "scripts": {
6 "start": "expo start",
7 "android": "expo start --android",
8 "ios": "expo start --ios",
9 "eject": "expo eject",
10 "format": "prettier --write '**/*.js'",
11 "lint:fix": "eslint . --ext .js --fix"
12 },
13 "husky": {
14 "hooks": {
15 "pre-commit": "lint-staged"
16 }
17 },
18 "lint-staged": {
19 "*.js": [
20 "npm run format",
21 "npm run lint:fix"
22 ]
23 },
24 "dependencies": {
25 "@apollo/react-hooks": "^3.1.3",
26 "@expo/vector-icons": "^10.0.0",
27 "@react-native-community/masked-view": "0.1.10",
28
"@react-navigation/bottom-tabs": "^5.5.2", 29 "@react-navigation/drawer": "^5.8.2",
30 "@react-navigation/native": "^5.5.1",
31 "@react-navigation/stack": "^5.5.1",
32 "apollo-boost": "^0.4.3",
33 "apollo-cache-inmemory": "^1.6.2",
34 "apollo-client": "^2.6.3",
35 "apollo-link": "^1.2.12",
36 "apollo-link-context": "^1.0.18",
37 "apollo-link-state": "^0.4.2",
38 "apollo-link-ws": "^1.0.20",
39 "apollo-upload-client": "^10.0.1",
40 "expo": "^38.0.8",
41 "expo-constants": "~9.1.1",
42 "expo-font": "~8.2.1",
43 "expo-localization": "~8.2.1",
44 "expo-location": "~8.2.1",
45 "expo-permissions": "~9.0.1",
46 "expo-splash-screen": "^0.3.1",
47 "expo-task-manager": "~8.3.0",
48 "graphql": "^14.3.1",
49 "graphql-tag": "^2.10.1",
50 "i18n-js": "^3.3.0",
51 "react": "16.11.0",
52 "react-apollo": "^2.5.8",
53 "react-native": "https://github.com/expo/react-native/archive/sdk-38.0.0.tar.gz",
54 "react-native-animatable": "^1.3.2",
55 "react-native-flash-message": "^0.1.13",
56 "react-native-gesture-handler": "~1.6.0",
57 "react-native-maps": "0.27.1",
58 "react-native-maps-directions": "^1.8.0",
59 "react-native-material-textfield": "github:n4kz/react-native-material-textfield#pull/28
60 "react-native-modal": "^11.5.6",
61 "react-native-reanimated": "~1.9.0",
62 "react-native-safe-area-context": "~3.0.7",
63 "react-native-screens": "~2.9.0",
64 "react-native-webview": "9.4.0",
65 "subscriptions-transport-ws": "^0.9.16"
66 },
67 "devDependencies": {
68 "babel-preset-expo": "^8.2.3",
69 "eslint": "^7.1.0",
70 "eslint-config-standard": "^14.1.1",
71 "eslint-plugin-import": "^2.20.2",
72 "eslint-plugin-node": "^11.1.0",
73 "eslint-plugin-promise": "^4.2.1",
74 "eslint-plugin-react": "^7.20.0",
75 "eslint-plugin-standard": "^4.0.1",
76 "husky": "^4.2.5",
77 "lint-staged": "^10.2.7",
78 "prettier": "2.0.5",
79 "prettier-config-standard": "^1.0.1"
80
81 }",private": true
82 }
83
84
85
86
87
Technologies Used
The components of the App are built using the core components of and . The
theme also constantly incorporates various other latest technologies.
React Native NativeBase
React Native
NativeBase v2.x
Expo
React Navigation
Apollo GraphQL
React Native
React Native helps in making the development work easier and allowing the developers to focus on the core
app features in every new release. It is the fastest-developing mobile app development that essentially
permits you to create an isolated product with often outcomes. The hymn of React Native — learn once,
write anywhere. React Native takes charge of the view controllers and programatically generates native
views using javascript. This means that you can have all the speed and power of a native application, with
the ease of development that comes with React.
NativeBase
NativeBase is an open source framework from the team of . This framework enable developers
to build high-quality mobile apps using iOS and Android apps with a fusion of .
NativeBase builds a layer on top of React Native that provides you with basic set of components for mobile
application development. The applications stack of components is built using native UI components and
because of that, there are no compromises with the User Experience of the applications. NativeBase is
targeted specially on the look and feel, and UI interplay of your app. NativeBase without a doubt fits in well
with mobile applications which cut downs one huge part of your app - The Front end.
StrapMobile
React Native ES6
Quick links to NativeBase
GitHub
NativeBase Components
Documentation
Blogs
Expo
is used to make react native applications. It provides a set of tools that simplify the development and
testing of React Native app and arms you with the components of users interface and services that are
usually available in third-party native React Native components. With Expo you can find all of them in Expo
SDK.
Expo
Enatega is build using it is powered with to give you access to your device capabilities
and the Expo services to handle the heavy lifting of building your app binary and uploading it to the store, all
without you touching Xcode or Android Studio. With the "bare" workflow, we also speed up your
development with the and React Native, and you have full control over your iOS and Android
projects.
Expo Expo SDK
Expo SDK
React Navigation
React Navigation is used for routing and navigation in React Native apps. Navigator has some common
elements which Enatega uses.
Drawer Navigator
Its used to make a drawer when a user swipes from left to right or presses the drawer icon
Stack Navigator
Stack Navigator stacks screens on top of each other and only one screen is shown at a time
Switch Navigator
Switch Navigator is used for the authentication flow inside application. Currently no authentication
happens in Enatega but for good practice all routing related to authentication is made using this
Apollo GraphQL
is a substitute for architecture modern applications aren't fit for . The reason is the
point-to-point nature of , a procedural API technology, forces the authors of services and clients to
coordinate each use case ahead of time. When frontend teams must constantly ask backend teams for new
endpoints, often with each new screen in an app, development is dramatically slowed down. Both teams
need to move fast independently.
GraphQL REST REST
REST
For Application level state management conventionally is used but in our app we have used
built in state management. The problem with is too much boiler code which bloats code and has a
strong learning curve for new user. Since we are already using for replacement to without
using any third party state management libraries we have used it's built in State management provided by
Apollo Client. Our application is a medium size application and works very well with it.
Redux Apollo's
Redux
Apollo REST
Guide
Start Building Your App
Contents discussed in this section:
How to add new Screen?
How to add new Stylesheet?
How to add new Screen
Create a new folder, say NewScreen and place in under ` /src/screens/ .
Create a new file NewScreen.js ,whitin this folder.
Name the class same as that of folder name.
class NewScreen extends React.Component {
. . .
. . .
}
How to add new Stylesheet
Create a new file styles.js , place it under /src/screens/NewScreen .
import newly created StyleSheet into the Component.
import styles from './styles';
class NewScreen extends React.Component {
. . .
. . .
}
Customize
Theming Your App
Making changes in the app that you want is much simpler. It's designed in a way to handle changes and to
make the whole process easier.
The theme has separate file inclusive of colour schemes for the whole app.
The theme allows you to change name, logo and splash screen of the app
The theme has separate screens so making changes in one screen would not effect other screen
Change App Colors
To customise the colour scheme for the app you need to make changes in one file only
src/utils/colors.js set the colours that you require in this file it should reflect throughout the app.
Change Icon and Splash image
Expo
With changing the app icon is much easier. You need to replace the icon inside
assets/icons.png similarly if you want to change the splash screen you need to replace the image
in assets/splash.png with your own image.
Expo
Rename App
Expo
Renaming app name is pretty straight forward just replace the name attribute inside package.json
Changing the URL name for publishing with Expo
To change the App name for the Expo url, you just need to rename the slug attribute in app.json
file.
Components
Components
App
Login
OrderDetail
App
Location: The UI can be found under src/App.js
Working: Configures Native base, Fonts, Push Notification, Apollo, Authentication and Navigation.
Result: Everything is configured loads the next view depending on if the user is authenticated or not. If
the user is not authenticated will show tutorial screen first else it will show Menu Screen.
Login
Location: The UI can be found under src/screens/Login/Login.js Its can be found
under src/apollo/server.js with constant login
mutation
Working: Logins User using Google, Facebook or Manual Registration. A separate component for
ForgotPassword is also present its component can be found src/components/ForgotPassword
Its mutation can be found under src/apollo/server.js with constant forgotPassword
Result: Logins User with validation. If a user uses forgotPassword an email will be sent to him with reset
link for changing his/her password.
OrderDetail
Location: The UI can be found under src/screens/OrderDetail/OrderDetail.js It has
Apollo constants of orderItem its of type fragment located in src/apollo/client.js
Working: It shows OrderDetail to the rider where the status of the order can be changed by the rider.