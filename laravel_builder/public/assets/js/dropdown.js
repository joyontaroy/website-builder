// Dropdown menu showing properly above the datatable
let parents = [];
  let menus = [];

  // and when you show it, move it to the body
  $(window).on('show.bs.dropdown', function(e) {

    let target = $(e.target);

    // save the parent
    parents.push(target.parent());

    // grab the menu
    let dropdownMenu = target.next();

    // save the menu
    menus.push(dropdownMenu);

    // detach it and append it to the body
    $('body').append(dropdownMenu.detach());

    // grab the new offset position
    let eOffset = target.offset();

    // make sure to place it where it would normally go (this could be improved)
    dropdownMenu.css({
      'display': 'block',
      'top': eOffset.top + target.outerHeight(),
      'left': eOffset.left,
    'animation': 'fadeIn 0.3s',
      
    });
  });

  // and when you hide it, reattach the drop down, and hide it normally
  $(window).on('hide.bs.dropdown', function(e) {

    menus.forEach(function(element, index) {
      let parent = parents[index];
      let dropdownMenu = element;

      parent.append(dropdownMenu.detach());
      dropdownMenu.hide();

      menus.splice(index, 1);
      parents.splice(index, 1);
    })
  });