/*=============================================
S1 LUNES 8
=============================================*/

formS1Lunes8.addEventListener('submit', async (e) => {
  e.preventDefault();

  let datos = new FormData(formS1Lunes8);

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
S1 MARTES 8
=============================================*/

formS1Martes8.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Martes8);
  
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
S1 MIERCOLES 8
=============================================*/

formS1Miercoles8.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Miercoles8);
  
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
S1 JUEVES 8
=============================================*/

formS1Jueves8.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Jueves8);
  
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
S1 Viernes 8
=============================================*/

formS1Viernes8.addEventListener('submit', async (e) => {
    e.preventDefault();
  
    let datos = new FormData(formS1Viernes8);
  
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
  
  

