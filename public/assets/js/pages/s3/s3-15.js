/*=============================================
S3 LUNES 15
=============================================*/

formS3Lunes15.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formS3Lunes15);

  try {
    const post = await 	fetch('public/assets/ajax/horarios/guardar-horario.php', {
      method: 'POST',
      body: datos
    })

    const resPost = await post.json();

    console.log(resPost)

    if(resPost.ok){

      Swal.fire(
        'Correcto!',
        'Los datos han sido guardados con éxito!',
        'success'
      ).then(function(result){

        if(result.value){   
        window.location = "horario-s3";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
S3 MARTES 15
=============================================*/

formS3Martes15.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Martes15);
  
    try {
      const post = await 	fetch('public/assets/ajax/horarios/guardar-horario.php', {
        method: 'POST',
        body: datos
      })
  
      const resPost = await post.json();
  
      console.log(resPost)
  
      if(resPost.ok){
  
        Swal.fire(
          'Correcto!',
          'Los datos han sido guardados con éxito!',
          'success'
        ).then(function(result){
  
          if(result.value){   
          window.location = "horario-s3";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

/*=============================================
S3 MIERCOLES 15
=============================================*/

formS3Miercoles15.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Miercoles15);
  
    try {
      const post = await 	fetch('public/assets/ajax/horarios/guardar-horario.php', {
        method: 'POST',
        body: datos
      })
  
      const resPost = await post.json();
  
      console.log(resPost)
  
      if(resPost.ok){
  
        Swal.fire(
          'Correcto!',
          'Los datos han sido guardados con éxito!',
          'success'
        ).then(function(result){
  
          if(result.value){   
          window.location = "horario-s3";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

/*=============================================
S3 JUEVES 15
=============================================*/

formS3Jueves15.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Jueves15);
  
    try {
      const post = await 	fetch('public/assets/ajax/horarios/guardar-horario.php', {
        method: 'POST',
        body: datos
      })
  
      const resPost = await post.json();
  
      console.log(resPost)
  
      if(resPost.ok){
  
        Swal.fire(
          'Correcto!',
          'Los datos han sido guardados con éxito!',
          'success'
        ).then(function(result){
  
          if(result.value){   
          window.location = "horario-s3";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })
  
/*=============================================
S3 Viernes 15
=============================================*/

formS3Viernes15.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Viernes15);
  
    try {
      const post = await 	fetch('public/assets/ajax/horarios/guardar-horario.php', {
        method: 'POST',
        body: datos
      })
  
      const resPost = await post.json();
  
      console.log(resPost)
  
      if(resPost.ok){
  
        Swal.fire(
          'Correcto!',
          'Los datos han sido guardados con éxito!',
          'success'
        ).then(function(result){
  
          if(result.value){   
          window.location = "horario-s3";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })
  
  

