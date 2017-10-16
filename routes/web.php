/**
* 顯示所有任務
*/
Route::get('/', function () {
    return view('tasks');
//
});

/**
* 增加新的任務
*/
Route::post('/task', function (Request $request) {
//
});

/**
* 刪除任務
*/
Route::delete('/task/{task}', function (Task $task) {
//
});