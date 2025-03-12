<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// done for categories controllers
class CategoryController extends Controller
{
    //

    public function getCategories(){
        return ["message" => "Getting list of categories"];
    }


    public function createCategory()
     {
         return ["message" => "Creating a new category"];
     }
 
 
     // Get /api/categories/{categoryId}
 
     public function getCategory($categoryId)
     {
         return ["message" => "Getting a category base on given $categoryId"];
     }
 
     // Patch /api/categories/{categoryId}
     public function updateCategory($categoryId)
     {
         return ["message" => "Updating a category base on given $categoryId"];
     }
 
 
     /// Delete /api/categories/{categoryId}
     public function deleteCategory($categoryId)
     {
         return ["message" => "Deleting a category base on given $categoryId"];
     }
}
