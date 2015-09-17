Kanboard
========

Kanboard is a project management software that use the Kanban methodology.

Official website: <http://kanboard.net>

## Setting Up on Shipped
This is an sample project to demonstrate how to create/deploy a Python application using Shipped.

### Step 1. Set Up GitHub

[Git](https://git-scm.com/) is a source and version control system hosted on the web, and [GitHub](https://github.com/) is a repository of Git projects. Shipped stores your projects on GitHub, and you'll need a GitHub account to use Shipped. If you already have a GitHub account, skip to step 2. Otherwise, navigate to the [GitHub home page](https://github.com/) using any modern browser (we recommend Chrome), click on [Sign up](https://github.com/join) and follow the instructions to create a free account. You don't need to do anything more with GitHub at this time; Shipped will do it all for you.

### Step 2. Login to Shipped
Your GitHub account is all you need to login to Shipped. Navigate to the [Shipped welcome page](http://ciscocloud.github.io/) and click on the big green "Sign up with GitHub" button. 

![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/welcome.Png)

Shipped displays its home page. If this is your first time in Shipped, it automatically pops up the Create Your Project dialog. If not, select Create New Project from the Your Projects dropdown to get the popup:

## Create Your Kanboard Project with Shipped

### Step 3 Compose Your Project
Use any modern browser (we recommend Chrome) to navigate to the the Shipped welcome page. If you're not logged, click on the big green "Sign up with GitHub" button to login. If this is your first project, Shipped automatically pops up a Create New Project form; if not, select Create New Project from the Your Projects dropdown to get the popup:
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/createproject.Png)

Enter a name for your project (we'll use "Kanboard-Dev" for this project) and press Start Composing. Shipped displays a list of development services:
### Step 4 Fork the Github project
#### Fork CiscoCloud/Kanboard as your repository master project branch.
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/fork.Png)

### Step 5 Add a service
The development services listed are examples of what Shipped calls "microservices" - supporting services used by a project. We can choose as many microservices as needed for a project. Shipped installs whatever is needed to deploy the selected microservices on one of the VMs it creates for you. 

#### Step 5.1 Select a service type.
 
For this project we will select **"Python"** which create Node JS VM
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/selectservice.Png)

Click on the Select button to the right of this service. Shipped pops up the Service Configuration form that you'll use to specify the GitHub repository where Shipped will store the source code using the service:
 
#### Step 5.2 Provide github repository name. 

![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/selectrepo.Png)


This form allow us to specify:

| Name | Description          |
| ------------------- | -------------------- |
| Name of GitHub Repository|	The name of the GitHub repository where Shipped stores the source code using this service. Shipped automatically creates the repository if necessary|
| GitHub Organization|	The GitHub account owning the repository. This can be your personal account, or the account of a company or organization associated with your account. |
| Private Public	The type of repository to create | private (available only to specific GitHub users) or public (viewable by any web user). You need a paid GitHub account to create a private repository.|
 

 
### Step 6. Build Your Project
#### Step 6.1 Initiate Build process.
 
 Specify "Kanboard" for the repository name and press Add Service. Shipped re-displays the Compose Your Project form with the repository name for the selected service above the Build Project button.
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/buildproject.Png)

To build your project, press the Build Project button. The button label changes to Building, and a status bar moves across the button while Shipped creates your GitHub repository and stores the description of your project in its database. When it's finished, it pops up the Let's Get Set Up form containing the command to bootstrap the project on your computer:
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/buildlocal.Png)

## Bootstrap Your Local Development Environment
Bootstrapping a Shipped project means downloading the project's source code to your machine; setting up a local Git repository tied to the cloud-based repository created by Shipped; installing the pre-requisite software Vagrant and VirtualBox (if necessary); creating and the virtual machines that host your development environment; setting up a continuous integration build; and brings up a web server running the new application. The process is fully automatic; you just need to copy and paste the command presented by Shipped when you created the project.

### Step 7.1 Bootstrap your environment (Refer 7.2 for fast bootstrap)

The bootstrap process runs in a command-line terminal window, so the first step in bootstrapping your project is opening a terminal window. The way you do this depends on your operating system:

| Os Type | Action          |
| ------------------- | -------------------- |
| OS X (Mac)|	Press Command + Space to open Spotlight Search. Type Terminal and double-click the Terminal Application. Menu option Shell -> New Window will open a new window for you. |
| Ubuntu |	Press Ctrl+Alt+T |
| Windows |	Click Start, type "cmd", and press Enter for a normal terminal window, or Ctrl+Shift+Enter for an Administrator terminal window. You will need an Administrator window if the bootstrap process needs to install Vagrant and VirtualBox. If you already have this software installed, you can use a normal terminal window. |

When you completed creating your project in Step 6, Shipped popped up the Let's Get Set Up form containing the bootstrap command:
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/buildlocal.Png)


Execute these command in console/terminal.
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/console.Png)

and on the Shipped browser window, which displays a circular animation ticking off each step in the bootstrap process as it happens:
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/buildstatus.Png)

Among its other actions, the Shipped bootstrap process brings up a web server on a newly-created VM and uses it to run your application. The last few lines output on the terminal window show you Shipped is running the application:
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/consoleout.Png)

#### OR


### Step 7.2 (*optional) Fast bootstrap your environment

In case you dont this build to be deployed locally. you can opt for fast bootstrap option.

you can set **fast** option while running your cli command inside terminal/console
for example:

shipped.exe -t FJLDKmsJvvoFlpVssIAYkbKrImXeovaV Local bootstrap 9c38dd91-5bdf-11e5-9640-0242ac110008 fast

![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/fastbuild.Png)

This flag will skip all the Vagrant related process in bootstrap. This means it stops after cloning the repository(s) and downloading files. you can still proceed with local commit to initiate a shipped build. 

If we wants to build locally, we needs to bootstrap again.


## Build and Deploy the Application

### Step 8 Run a Build

Among the tasks Shipped performed during bootstrap was to store the application's source code in a local Git repository tied to the Git repository in the cloud, and set up a continuous integration build, so that any commit to the repository automatically triggers a build. When the bootstrap process completes, the Shipped browser window displays the command you need to run your first build:

![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/pushbuild.Png)

Once again, select the command by clicking on it, copy and paste it into your terminal window. The command changes the directory to the one containing your new local Git repository and commits the initial copy of the application source to your cloud-based remote Git repository

This automatically triggers a build, you see this in event section at your browser window

### Step 9 Deploy Your Project to the Cloud

The last step in the bootstrap process is deploying your project's application to the Cisco cloud. To do this, click on the Deploy tab at the top left of the screen. Shipped displays the Deploy tab with a message that there are currently no deployed environments:

#### Step 9.1 Create environment.
Create a new Environment as 

![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/newenv.Png)

#### Step 9.2 Deploy to environment.
Shipped shows the message "Deploying to environment..." under the environment name. please click on that , and a short time later replaces it with a "Deployed successfully" message:
![](https://github.com/CiscoCloud/kanboard/blob/shipped/images/deploy.Png)


Congratulations! You've deployed your Kanboard application to the cloud. Click on the URL in the "Deployed successfully" message to see the application running in its new environment


