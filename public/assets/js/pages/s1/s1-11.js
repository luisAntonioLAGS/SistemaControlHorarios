/*=============================================
S1 LUNES 11
=============================================*/

formS1Lunes11.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formS1Lunes11);

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
        window.location = "horario-s1";
        } 
      });
    }
        
  } catch (error) {
    console.log(error);
        
  }
})

/*=============================================
S1 MARTES 11
=============================================*/

formS1Martes11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Martes11);
  
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
          window.location = "horario-s1";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

/*=============================================
S1 MIERCOLES 11
=============================================*/

formS1Miercoles11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Miercoles11);
  
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
          window.location = "horario-s1";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })

/*=============================================
S1 JUEVES 11
=============================================*/

formS1Jueves11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Jueves11);
  
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
          window.location = "horario-s1";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })
  
/*=============================================
S1 Viernes 11
=============================================*/

formS1Viernes11.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Viernes11);
  
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
          window.location = "horario-s1";
          } 
        });
      }
          
    } catch (error) {
      console.log(error);
          
    }
  })
  
  

