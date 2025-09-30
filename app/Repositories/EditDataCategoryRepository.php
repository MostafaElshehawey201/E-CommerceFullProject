<?php

namespace App\Repositories;

use App\Interfaces\EditDataCategoryDataInterface;
use App\Models\Category;

class EditDataCategoryRepository implements EditDataCategoryDataInterface
{

    public function __construct() {}

    public function MethodEditDataCategoryInterface($request, $category_id)
    {
        $OldCategoryData = Category::where('id', $category_id)->firstOrFail();
        try {
            if ($OldCategoryData['image'] && $request->hasFile('image')) {
                unlink(public_path('uploads/images/' . $OldCategoryData['image']));
            }
            $newImage = time() . '.' . $request['image']->extension();
            $request['image']->move(public_path('uploads/images'), $newImage);
            $OldCategoryData->image = $newImage;

            $OldCategoryData->update([
                "name" => $request['name'],
                "image" => $OldCategoryData->image,
                "description" => $request['description'],
            ]);

            return [
                "success" => true,
                "oldCategoryData" => $OldCategoryData,
            ];
        } catch (\Exception $error) {
            return [
                "success" => false,
                "message" => $OldCategoryData,
            ];
        }
    }
}
