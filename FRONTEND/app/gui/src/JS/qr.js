    let scanner= new instascan.Scanner (

    {
      video: document.getElementById('preview')
    }
  );
  scanner.addlIsten('scan',function(content) {
      alert('Escaneando el contenido: '+content);
      window.open(content, "_blank");
  });
  instascan.Camera.getCameras().then(cameras=>
  {
      if (cameras.length > 0){
          scanner.start(cameras[0]);
      } else {
          console.error('No hay camara xd');
      }
  });



