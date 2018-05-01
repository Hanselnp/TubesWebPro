var myDropzone = [];
var comicUploads = [];
var baseUrl = "http://localhost/TubesWebPro/";

function removeAllDropzone() {
  if (myDropzone != null) {
    $.each(myDropzone, function(index, e) {
      e.destroy();
    });
    myDropzone.length = 0;
  }
}

function concatData(unconcated){
  return [].concat.apply([], unconcated);
}

function saveToTemp(uri) {
  comicUploads.push(uri);
}

function createUploader(targetContainer) {
  myDropzone.push(
    new Dropzone(targetContainer, {
      paramName: "comicPages",
      params: {transferName: "comicPages"},
      url: baseUrl+"UploadComic/uploadCover",
      type: "POST",
      maxFiles: null,
      maxFilesize: 2,
      previewsContainer: false,
      uploadMultiple: false,
      success: function (file, response) {
        console.log(response);
        if($(targetContainer).children(".uri")) {
          $(".uri").remove();
        }
        $(targetContainer).parent().append(`<input class="uri" style='display: none;' name='uploadURI' value='`+response.Url+`' readonly/>`);
        $(targetContainer).css("background-image", "url('/TubesWebPro/uploads/comics/covers/"+response.Url+"')");
        $(".dz-message").empty();
      },
      error: function(response) {
        noError(999);
      }
    })
  );
}

function createComicPageUploader(targetContainer) {
  myDropzone.push(
    new Dropzone(targetContainer, {
      paramName: "comicPages",
      params: {transferName: "comicPages"},
      url: baseUrl+"UploadComic/uploadPages",
      uploadMultiple: false,
      autoProcessQueue: false,
      method: "POST",
      maxFilesize: 1,
      previewTemplate: `
        <div class="dz-preview dz-processing dz-image-preview dz-success dz-complete">
          <div class="dz-image"><img alt="" data-dz-thumbnail="" src=""></div>
          <div class="dz-details">
            <div class="dz-size">
              <span data-dz-size=""></span>
            </div>
            <div class="dz-filename">
              <span data-dz-name=""></span>
            </div>
            <a class="dz-remove" data-dz-remove="" href="javascript:undefined;" style="margin-top: 5px;">Remove file</a>
          </div>
          <div class="dz-progress">
            <span class="dz-upload" data-dz-uploadprogress="" style="width: 100%;"></span>
          </div>
          <div class="dz-error-message">
            <span data-dz-errormessage=""></span>
          </div>
          <div class="dz-success-mark"></div>
          <div class="dz-error-mark"></div>
        </div>
      `,
      success: function (file, response) {
        console.log(response.Url);
        saveToTemp("uploads/comics/pages/"+response.Url);
      },
      uploadprogress: function (file, progress, bytesSent) {
        // $(".progress").css("width", (progress)+"%");
      },
      processing: function() {
        this.options.autoProcessQueue = true;
      },
      successmultiple: function (file, response) {
        saveToTemp("uploads/comics/pages/"+response.Url);
      },
      queuecomplete: function () {
        saveEpisodesToDatabase();
      },
      error: function(response) {
        // noError(999);
      },
    })
  );
}

// $("#searches").on("submit", function(e) {
//   e.preventDefault();
//   changeable("search", $("#searches input").val());
// });

// function changeable(pageName, searchThis, data) {
//   $.ajax({
//     type: "GET",
//     url: "pageprocessor/redir_page?content="+pageName+"&title="+data,
//     success: function(response) {
//       $("#changeable").html(response);
//       if (searchThis != null || searchThis != undefined) {
//
//       }
//     }
//   });
// }
