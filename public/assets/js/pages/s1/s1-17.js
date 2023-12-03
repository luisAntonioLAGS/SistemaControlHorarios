/*=============================================
S1 LUNES 17
=============================================*/

formS1Lunes17.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formS1Lunes17);

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
S1 MARTES 17
=============================================*/

formS1Martes17.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Martes17);
  
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
S1 MIERCOLES 17
=============================================*/

formS1Miercoles17.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Miercoles17);
  
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
S1 JUEVES 17
=============================================*/

formS1Jueves17.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Jueves17);
  
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
S1 Viernes 17
=============================================*/

formS1Viernes17.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Viernes17);
  
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
  
  

