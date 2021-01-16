# object_plugin

**It's a plugin i made it to apply add bootstrap css and js file to my plugin and this plugin make a bootstrap's form inputs and buttons by add the shortcode of inputs , buttons**

### Prerequisites

You should have `composer` installed. If you don't, install composer from [here](https://getcomposer.org/download/)
and for better understanding concerning how to setup the environment kindly watch (https://www.youtube.com/watch?v=QEZwOCCXask)
You should have npm or yarn installed from [here](https://www.digitalocean.com/community/tutorials/how-to-install-node-js-on-ubuntu-18-04)


### Installation

**My Plugin consists of one branch (master)so please follow the all the followings steps to open our project**

### **1) Backend**

1. Clone master
    ```sh
    git clone --branch master https://github.com/mohamedAhmed97/short_code_wp.git
    ```
2. cd into the project. 
    ```sh
    cd short_code_wp
    ```
3.  Run this command to update composer packages
    ```sh
    composer install
    ```
4. auto load files
    ```sh
    composer dump-autoload
    ```
5. paste the plugin in wp-content/plugins/

6. activate the plugin in plugins from admin panel
