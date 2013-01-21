<?php 
session_start();
require './membresActions/authentification.php';

if(Auth::islogged()){
}else{
	header("Location:index.php");	
	
}
?>
<!DOCTYPE html>
<html lang="en">
  
  <?php include './common/header.php' ?>
  
  <body>
    <?php include './common/navigation.php' ?>

    	<div class="container">
    	<div class="page-header">
    	<h2>Brainstorms en cours</h2>
    	</div>
    	<ul class="thumbnails">
<li class="span6">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAgAElEQVR4Xu3dh7MUxRYH4DGCWQQRMEeCOWfL8HebMSsCiooZE0bEnPXV2aq1lrmzcPdyhtccv6miXhXsnu3+Tr/yVzO9vSccOHDgn85FgAABAgQIECCQJnCCgJVmqRABAgQIECBAYCIgYFkIBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjsCYAv/88093wgknpH7EX3/9Nal54oknptUdo2ba4GYK8RxDVU0CBEJAwLIOCDQs8PPPP3cff/xxF/8bf3799dfulFNO6U477bTu9NNP79auXdtt2LBhoRn88ssv3f79+7uvvvpqUjPCUFwnn3zypOb69eu7jRs3dqtWrVp23TFqLvvDF3hhzPfzzz/vvv7664nlH3/8MfGMecefs88+u9u0adNCYXOMuY9RcwEmLyVAIEFAwEpAVIJAtkCEnvfee6/75JNPur///vuw5SMUXHXVVd155513xGFEvbfffvuINSNsbd68eRK0jnSNUfNIn7nov8edqvD88MMPj/jWCFox9wivR7rGmPsYNY80D/9OgEC+gICVb6oigaMW2LVr1+QO0yLXDTfcMLn7NO/66KOPJuFqkWvbtm2TOzrHsuYi41vua3fv3t19+eWXy3355HUXXnhht3Xr1mM69zF6tNCkvZgAgTQBASuNUiECOQKffvpp9+abby5cLO463XHHHZNHXf3rhx9+6F588cUu7uQscsW+rLvuuuuY1VxkbMt9bTxi3bt373Jffsjrrr/++u6CCy7guSI9byLw3xYQsP7b/Tf7xgRij9ALL7zw776o6fDOOOOMyZ2k2HsVe4cihP30009LRr9u3brupptuWvL3b7311uRxY/+K18efeAwZ+5IOHDiw5DWXX355d+WVVx6TmtntiHk9/fTTk71Ws1ds6o9Hq+ecc85kv9XBgwcnf/pX7M+6++67u1NPPfWQf/qvemb3Rz0ClQUErMrdNbfjTmDoEVGEgFtuuaU76aST/p1PBIeXX365+/777w+ZYwSBBx544JC/mxcyLr744sleo9lr6FFahLp777139JpjNCses8bj1v61ZcuW7qKLLjrkr/ft29e98847S157xRVXdPFnev2XPcfokZoEqgoIWFU7a17HpcCePXsm3/CbvW6++ebBDddxt2nHjh1L5nnfffd1q1ev/vfv487Uzp07lwSxCE2zoS1e8Pvvv3fbt29fsgn+9ttvn9ztmV7ZNaff6OtPJsY39MgzXjfvPXHXaTr/N954o/vss88OKRuP/OLR39D10ksvdd99990h/xT72mJ/21hzj7rZnsfl4jdoAsUEBKxiDTWd41sgHg/GfqnZ6+GHHx48NiDC0FNPPbVkwv0w9Prrr0+OJpi9+qFh9t+GQkb/bld2zXlhMR7lxR6weEQ6e8W3LJ955plJIOxfcbdv+o3KuMvXf/R37bXXzv125AcffDD5tuHsFQHvnnvu+fevsucehceoeXz/P8HoCRz/AgLW8d9DMygkEJvbZ49liP1B877JFo8HY+N6/4pHhLN7hp599tnJeVezV+ypir1VQ1eMIfZ4zV5x9yqC2/Qao+bQ58bnRViK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"/>
<div class="caption">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

<p> By <a href="#">Anthony Osmar</a> le : 10 Janvier 2013
<p>
<a href="#" class="btn btn-primary">Action</a>
<a href="#" class="btn">Action</a>
</p>
</div>
</div>
</li>
<li class="span6">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAgAElEQVR4Xu3dh7MUxRYH4DGCWQQRMEeCOWfL8HebMSsCiooZE0bEnPXV2aq1lrmzcPdyhtccv6miXhXsnu3+Tr/yVzO9vSccOHDgn85FgAABAgQIECCQJnCCgJVmqRABAgQIECBAYCIgYFkIBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjsCYAv/88093wgknpH7EX3/9Nal54oknptUdo2ba4GYK8RxDVU0CBEJAwLIOCDQs8PPPP3cff/xxF/8bf3799dfulFNO6U477bTu9NNP79auXdtt2LBhoRn88ssv3f79+7uvvvpqUjPCUFwnn3zypOb69eu7jRs3dqtWrVp23TFqLvvDF3hhzPfzzz/vvv7664nlH3/8MfGMecefs88+u9u0adNCYXOMuY9RcwEmLyVAIEFAwEpAVIJAtkCEnvfee6/75JNPur///vuw5SMUXHXVVd155513xGFEvbfffvuINSNsbd68eRK0jnSNUfNIn7nov8edqvD88MMPj/jWCFox9wivR7rGmPsYNY80D/9OgEC+gICVb6oigaMW2LVr1+QO0yLXDTfcMLn7NO/66KOPJuFqkWvbtm2TOzrHsuYi41vua3fv3t19+eWXy3355HUXXnhht3Xr1mM69zF6tNCkvZgAgTQBASuNUiECOQKffvpp9+abby5cLO463XHHHZNHXf3rhx9+6F588cUu7uQscsW+rLvuuuuY1VxkbMt9bTxi3bt373Jffsjrrr/++u6CCy7guSI9byLw3xYQsP7b/Tf7xgRij9ALL7zw776o6fDOOOOMyZ2k2HsVe4cihP30009LRr9u3brupptuWvL3b7311uRxY/+K18efeAwZ+5IOHDiw5DWXX355d+WVVx6TmtntiHk9/fTTk71Ws1ds6o9Hq+ecc85kv9XBgwcnf/pX7M+6++67u1NPPfWQf/qvemb3Rz0ClQUErMrdNbfjTmDoEVGEgFtuuaU76aST/p1PBIeXX365+/777w+ZYwSBBx544JC/mxcyLr744sleo9lr6FFahLp777139JpjNCses8bj1v61ZcuW7qKLLjrkr/ft29e98847S157xRVXdPFnev2XPcfokZoEqgoIWFU7a17HpcCePXsm3/CbvW6++ebBDddxt2nHjh1L5nnfffd1q1ev/vfv487Uzp07lwSxCE2zoS1e8Pvvv3fbt29fsgn+9ttvn9ztmV7ZNaff6OtPJsY39MgzXjfvPXHXaTr/N954o/vss88OKRuP/OLR39D10ksvdd99990h/xT72mJ/21hzj7rZnsfl4jdoAsUEBKxiDTWd41sgHg/GfqnZ6+GHHx48NiDC0FNPPbVkwv0w9Prrr0+OJpi9+qFh9t+GQkb/bld2zXlhMR7lxR6weEQ6e8W3LJ955plJIOxfcbdv+o3KuMvXf/R37bXXzv125AcffDD5tuHsFQHvnnvu+fevsucehceoeXz/P8HoCRz/AgLW8d9DMygkEJvbZ49liP1B877JFo8HY+N6/4pHhLN7hp599tnJeVezV+ypir1VQ1eMIfZ4zV5x9yqC2/Qao+bQ58bnRViK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"/>
<div class="caption">
<h3>Réorganisation RH</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

<p> By <a href="#">Anthony Osmar</a> le : 10 Janvier 2013
<p>
<a href="#" class="btn btn-primary">Action</a>
<a href="#" class="btn">Action</a>
</p>
</div>
</div>
</li>

<div class="page-header">
    	<h1>Brainstorms passés</h1>
    	</div>
<li class="span6">
<div class="thumbnail">
<img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAgAElEQVR4Xu3dh7MUxRYH4DGCWQQRMEeCOWfL8HebMSsCiooZE0bEnPXV2aq1lrmzcPdyhtccv6miXhXsnu3+Tr/yVzO9vSccOHDgn85FgAABAgQIECCQJnCCgJVmqRABAgQIECBAYCIgYFkIBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjgABAgQIECAgYFkDBAgQIECAAIFkAQErGVQ5AgQIECBAgICAZQ0QIECAAAECBJIFBKxkUOUIECBAgAABAgKWNUCAAAECBAgQSBYQsJJBlSNAgAABAgQICFjWAAECBAgQIEAgWUDASgZVjsCYAv/88093wgknpH7EX3/9Nal54oknptUdo2ba4GYK8RxDVU0CBEJAwLIOCDQs8PPPP3cff/xxF/8bf3799dfulFNO6U477bTu9NNP79auXdtt2LBhoRn88ssv3f79+7uvvvpqUjPCUFwnn3zypOb69eu7jRs3dqtWrVp23TFqLvvDF3hhzPfzzz/vvv7664nlH3/8MfGMecefs88+u9u0adNCYXOMuY9RcwEmLyVAIEFAwEpAVIJAtkCEnvfee6/75JNPur///vuw5SMUXHXVVd155513xGFEvbfffvuINSNsbd68eRK0jnSNUfNIn7nov8edqvD88MMPj/jWCFox9wivR7rGmPsYNY80D/9OgEC+gICVb6oigaMW2LVr1+QO0yLXDTfcMLn7NO/66KOPJuFqkWvbtm2TOzrHsuYi41vua3fv3t19+eWXy3355HUXXnhht3Xr1mM69zF6tNCkvZgAgTQBASuNUiECOQKffvpp9+abby5cLO463XHHHZNHXf3rhx9+6F588cUu7uQscsW+rLvuuuuY1VxkbMt9bTxi3bt373Jffsjrrr/++u6CCy7guSI9byLw3xYQsP7b/Tf7xgRij9ALL7zw776o6fDOOOOMyZ2k2HsVe4cihP30009LRr9u3brupptuWvL3b7311uRxY/+K18efeAwZ+5IOHDiw5DWXX355d+WVVx6TmtntiHk9/fTTk71Ws1ds6o9Hq+ecc85kv9XBgwcnf/pX7M+6++67u1NPPfWQf/qvemb3Rz0ClQUErMrdNbfjTmDoEVGEgFtuuaU76aST/p1PBIeXX365+/777w+ZYwSBBx544JC/mxcyLr744sleo9lr6FFahLp777139JpjNCses8bj1v61ZcuW7qKLLjrkr/ft29e98847S157xRVXdPFnev2XPcfokZoEqgoIWFU7a17HpcCePXsm3/CbvW6++ebBDddxt2nHjh1L5nnfffd1q1ev/vfv487Uzp07lwSxCE2zoS1e8Pvvv3fbt29fsgn+9ttvn9ztmV7ZNaff6OtPJsY39MgzXjfvPXHXaTr/N954o/vss88OKRuP/OLR39D10ksvdd99990h/xT72mJ/21hzj7rZnsfl4jdoAsUEBKxiDTWd41sgHg/GfqnZ6+GHHx48NiDC0FNPPbVkwv0w9Prrr0+OJpi9+qFh9t+GQkb/bld2zXlhMR7lxR6weEQ6e8W3LJ955plJIOxfcbdv+o3KuMvXf/R37bXXzv125AcffDD5tuHsFQHvnnvu+fevsucehceoeXz/P8HoCRz/AgLW8d9DMygkEJvbZ49liP1B877JFo8HY+N6/4pHhLN7hp599tnJeVezV+ypir1VQ1eMIfZ4zV5x9yqC2/Qao+bQ58bnRViK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"/>
<div class="caption">
<h3>Thumbnail label</h3>
<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

<p> By <a href="#">Elodie Dufilh-plassy</a> le : 10 Octobre 2012
<p>
<a href="#" class="btn btn-primary">Action</a>
<a href="#" class="btn">Action</a>
</p>
</div>
</div>
</li>
</ul>
	
		   
		</div>
    <?php include './common/footer.php'?>

    <!-- /container -->
 
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="./js/slides.min.jquery.js"></script>

  </body>
</html>