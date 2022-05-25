
      const darkmode = document.querySelector('#darkmode');
      const body = document.querySelector('body');

      load();

      darkmode.addEventListener('click', e =>{
         body.classList.toggle('dark');
         store(body.classList.contains('dark'));
      });

      function load() {
         const dark = localStorage.getItem('dark');
         if (!dark) {
            store('false');
         }else if (dark == 'true') {
            body.classList.add('dark');
         }
      }

      function store(value) {
         localStorage.setItem('dark', value);
      }

      
