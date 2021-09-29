<?= $this->extend('Admin/layout/principal'); ?>



<?= $this->section('titulo'); ?>
 <?= $titulo;  ?>
<?= $this->endSection(); ?>


<?= $this->section('estilos'); ?>
   <!-- aqui enviamos para o template principal os estilos  -->
<?= $this->endSection(); ?>
   
   
   
   



<?= $this->section('conteudo'); ?>
   
     <!-- aqui enviamos para o template principal o conteudo  -->
     
 <?= $titulo;  ?>
<?= $this->endSection(); ?>
     
     
     
     


<?= $this->section('scripts'); ?>
    <!-- aqui enviamos para o template principal os scripts  -->
<?= $this->endSection(); ?>
