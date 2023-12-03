/*=============================================
S3 LUNES 11
=============================================*/

formS3Lunes11.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formS3Lunes11);

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
S3 MARTES 11
=============================================*/

formS3Martes11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Martes11);
  
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
S3 MIERCOLES 11
=============================================*/

formS3Miercoles11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Miercoles11);
  
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
S3 JUEVES 11
=============================================*/

formS3Jueves11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Jueves11);
  
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
S3 Viernes 11
=============================================*/

formS3Viernes11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS3Viernes11);
  
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
  
  

