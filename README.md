# Overview
Laravel multiple language website with english and hindi. Basic category and sub category modules CRUD operations, By default english language will be consider and language switcher should be select option at top nav bar.

Server Requirements
=====================================
<ul>
  <li><a href="https://www.php.net/" target="_blank">PHP Version</a> => 7.4 or higher</li>
  <li><a href="https://laravel.com/docs/master" target="_blank">Laravel Version</a> => 8 or higher</li>
  <li><a href="https://www.mysql.com/" target="_blank">MySQL Version</a> => 5.7 or higher</li>
</ul>

# Project Requirement
<ul>
  <li>Implement Multiple Language English and Hindi Language into Laravel Project </li>
  <li>Set Default language English if not selected by user </li>
  <li><b>Category Module CRUD</b></li>
  <li>Category Fields</li>
  <li>Category Name : [ Validation Rules : Accept only strings and space, Required ] </li>
  <li>Category Description : </li>
  <li>Status : Active / In-Active</li>
  <li>On Category Listing status can be changed using ajax</li>
  <li><b>Sub Category Module CRUD</b></li>
  <li>Sub Category Fields</li>
  <li>Sub Category Name : [ Validation Rules : Accept only strings and space, Required ] </li>
  <li>Sub Category Description : </li>
  <li>Select Parent Category : </li>
  <li>Status : Active / In-Active</li>
  <li>On Category Listing status can be changed using ajax</li>
</ul>

# Laravel / PHP Coding Standards
<ol>
 <li>Use Laravel's migration scripts for database schema and tables related to further all operations</li>
 <li>Use Laravel's factory and seeders for sample dummy data creations where required</li>
 <li>Use Laravel's validation using Request classes where required</li>
 <li>Use Laravel's Eloquent and Relationships in models where required</li>
 <li>Use camel case for function name and variable name. E.g getProductDetails() , $categoryDetails </li>
 <li>Comment on the above function with short details of that function use or purpose of function creation. </li>
 <li>Reuse the common codes using some helper class functions etc</li>
 <li>Remove unnecessary code and debug points that are not needed</li>
 <li>Avoid unnecessary loops if not required</li>
 <li>Avoid unnecessary variable creations</li>
 <li>Use PHP design patterns where required <a href="https://refactoring.guru/design-patterns/php" target="_blank">Design Patterns</a></li>    <li>Normalize database tables where required <a href="https://www.guru99.com/database-normalization.html" target="_blank">Database Normalization</a></li>
 <li>Optimize database tables</li>
 <li>Avoid MySQL joins queries if not required</li>
 <li>Avoid MySQL sub queries if it does not require</li>
 <li>For more information, please read the document <a href="https://drive.google.com/drive/folders/1_nxEPw01QnVkVQfZ2WtXyeX7NcQ6ENdh" target='_blank'>Code Standard</a>
</ol>


# References
<ol>
 <li>https://magecomp.com/blog/laravel-authentication-with-breeze/</li>
 <li>https://www.itsolutionstuff.com/post/how-to-create-multilingual-website-in-laravelexample.html</li>
 <li>https://www.youtube.com/watch?v=9Rocw50kpSY</li>
 <li>https://laravel.com/docs/10.x/localization#publishing-the-language-files</li>
<ol> 