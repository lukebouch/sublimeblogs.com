---
title: "Getting Started"
---
# Getting Started
So you decided to try out Sublime Blogs but don't know where to start? Don't worry, this article will walk you
            through the basics.
## Create an account
Ok... so this is an obvious one; you will need to sign up for an account before you can start using all of the awesome feature we have to offer you. It's easy and only takes a few seconds.

<a href="https://app.sublimeblogs.com/register" class="btn-primary">Sign Up</a>

![Register for an account](/assets/images/documentation/register.png)

## Create your first site
Now, it's time to create your first site. Each site has its own posts and uploads.

![Create a site](/assets/images/documentation/create-a-site.png)
![Site created](/assets/images/documentation/site-created.png)

## Add posts
Next, you will want to add a few blog posts.

![Add blog post](/assets/images/documentation/add-post.png)

## Create an access token
In order to access the API in your static site generator, you will need to create an access token. These tokens are per-site and only give access to the specific site they are created for. You can find the option to create a new token under the page to edit the site, which can be found by clicking on "Sites" in the navigation and then clicking on a specific site.

![Create an access token](/assets/images/documentation/create-an-access-token.png)

Note: For security reasons, this token will only be show this one time. If you loose it, you will need to revoke it and create a new one.

![Access token created](/assets/images/documentation/access-token-created.png)

## Access API
To access all of your posts, send a GET request to `https://api.sublimeblogs.com/posts`. You will need to pass the access token you just created as a bearer token in the request.

![Call posts api](/assets/images/documentation/call-posts-api.png)

## Render you posts
It's up to you how you generate you site. Choose whatever static site generator you want and just retrieve your posts from the API. That's the beauty of Sublime Blogs! 