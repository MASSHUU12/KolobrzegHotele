//initiate swup
const swup = new Swup({
    plugins: [
        new SwupScriptsPlugin({
            head: false,
            body: false,
        }),
        new SwupFormsPlugin({
            formSelector: 'form[data-swup-form]'
        })
    ] 
  });

  //do things on every transition
  swup.on('willReplaceContent', () => {
    //scroll to top on every page change
    window.scrollTo({top: 0, behavior: 'smooth'});

    //reload scripts that otherwise don't work
    searchDetails(url);
    searchbarDropdown(url);
  });