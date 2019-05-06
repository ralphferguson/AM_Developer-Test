# Aller Media Sverige -- Developer test #

The live version of the application can be viewed at: http://ralphblackferguson.com/programs/wordpress/

### File and Folder Structure ###
The two parts of the assignment — the API and the widget — are oganised into two folder; "article-api", and "wordpress-api-widget" respectively. The third folder, "wordpress-api-plugin", is a Plugin that was developed during the process of creating the other two solutions, and is called using a shortcode, rather than with a Widget.

Each part contains its own README file.

### Requirement Specification ###
The purpose of the application has two parts. The one is an application that includes a list of articles (using NodeJS with ExpressJS) which can be fetched using an API. And the other is a Widget that can be used on Wordpress.

The scope of the project is primarily to make a functioning API, and functioning Wordpress Widget. There is undoubtedly improvements that can be made around the security of the application, as Wordpress Widgets/Plugins can be susceptible to being hacked. This was an aspect, however, I decided not to delve into.

HTML is used very sparingly, and CSS has not been used at all when coding these solutions.

### Two Plugins ###
During the course of developing the Widget, I ended up developing both a Widget and a Plugin that called the API using a shortcode: [articles-api]. I decided to include both of them in the project.
