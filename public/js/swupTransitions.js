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

  swup.on('willReplaceContent', () => {
    accuracyBars();
    searchDetails();
    searchbarDropdown();
  });