# PedalPost: A Blog for Cyclists
![PedalPost image](images/home-1.png)
![PedalPost image](images/home-2.png)
![PedalPost image](images/home-3.png)
![PedalPost image](images/home-footer.png)

```
PedalPost is the culmination of my journey as a cyclist and a full-stack software developer. Its a Laravel-based blog platform designed exclusively for cyclists to share experiences, tips, and insights within the cycling community.
Table of Contents

    Introduction
    Features
    Installation
    Usage
    Contributing
    License
```
![PedalPost image](images/single-post-1.png)
![PedalPost image](images/single-post-2.png)
![PedalPost image](images/single-post-3.png)

## Introduction

```
PedalPost serves as a dedicated space for cyclists of all levels to connect, learn, and contribute to the vibrant cycling community. Whether you're a seasoned rider or just starting out, PedalPost offers a platform to share stories, discover new routes, and engage with fellow enthusiasts.
Features

    User-friendly Interface: Intuitive design for seamless navigation and interaction.
    Content Creation: Easily create, edit, and publish blog posts with rich formatting options.
    Community Engagement: Commenting system to facilitate discussions and feedback.
    Responsive Design: Access PedalPost from any device, ensuring a consistent experience.
    User Profiles: Customize profiles and showcase your cycling journey.
```
![PedalPost image](images/admin-dashboard.png)
![PedalPost image](images/admin-my-posts.png)
![PedalPost image](images/admin-all-posts.png)
![PedalPost image](images/admin-new-post.png)

## Installation

```
--> make sure composer,php,php-mysql,node.js,npm are installed & a local server too
--> clone project
--> cd into project
--> run "composer install"
--> run "cp .env.example .env" to create a .env file
--> create db and set in .env
--> run "php artisan key:generate" to generate app key
--> run "php artisan migrate" to create db tables
--> run "php artisan serve" 
```
![PedalPost image](images/admin-category-list.png)
![PedalPost image](images/admin-new-category.png)

## Usage

```
    Register/Login:
    Create a new account or log in with existing credentials.
    Run "php artisan db:seed" to create this users:
        ->admin@gmail.com::12345 as pswd
        ->editor@gmail.com::12345 as pswd
        ->author@gmail.com::12345 as pswd
        ->contributor@gmail.com::12345 as pswd

    Explore Posts:
    Browse through a collection of blog posts covering various topics related to cycling.
        ->make sure to login and create posts first

    Interact:
    Engage with posts by leaving comments, sharing insights, and connecting with other cyclists.

    Contribute:
    Share your own experiences, tips, and advice by creating and publishing blog posts.
```
![PedalPost image](images/subscriber-dashboard.png)
![PedalPost image](images/subscriber-my-posts.png)

## Contributing

```
Contributions are welcome! Feel free to open issues or submit pull requests to help improve PedalPost.
```

## License

```
This project is licensed under the MIT License.
```
