<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.master')

    @section('title', 'Page Title')

    @section('sidebar')
        @parent

        <p>This is appended to the master sidebar.</p>
        
        <div>
            <?php foreach ($res as $user): ?>
                Hello, <?php echo $user->name; ?> <br/>
            <?php endforeach; ?>
        </div>
        
        <!-- <script>
            fetch('/web/test')
                .then(response => response.json())
                .then(data => {
                // 处理从后端获取的数据
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        </script> -->
    @stop

    @section('content')
        <p>This is my body content.</p>
    @stop
</html>
