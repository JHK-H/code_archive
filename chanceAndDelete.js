$(document).on('click', '.edit-object', () => {
    let id = $(this).attr('edit-id');
    
    bootbox.confirm({
      message: "<h4>Do you want to proceed?</h4>",
      buttons: {
        confirm: {
          label: '<i class="fa fa-check"></i> Yes',
          className: 'btn-primary'
        },
        cancel: {
          label: '<i class="fas fa-times-circle"></i> Cancel',
          className: 'btn-danger'
        }
      },
      callback: (result) => {
        if (result == true) {
          let url = "editScript.php?id=" + id;
          $(location).attr('href', url);
        }
      }
    })
  })
  $(document).on('click', '.remove-object', () => {
    let id = $(this).attr('remove-id');
    bootbox.confirm({
      message: "<h4>You are deleting this script?</h4>",
      buttons: {
        confirm: {
          label: '<i class="fa fa-check"></i> Yes',
          className: 'btn-primary'
        },
        cancel: {
          label: '<i class="fas fa-times-circle"></i> Cancel',
          className: 'btn-danger'
        }
      },
      callback: (result) => {
        if (result == true) {
          let url = "removeScript.php?id=" + id;
          $(location).attr('href', url);
        }
      }
    })
  })