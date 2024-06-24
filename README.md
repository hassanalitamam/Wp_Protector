<!DOCTYPE html>
<html>
<head>
  <style>
    /* Styling for the entire README */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }
    
    /* Banner styling */
    .banner {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .banner img {
      max-width: 100%;
      height: auto;
    }

    /* Table of Contents */
    .toc {
      background-color: #f9f9f9;
      padding: 15px;
      border: 1px solid #ddd;
      margin-bottom: 20px;
    }

    .toc h2 {
      font-size: 1.5em;
      margin-top: 0;
    }

    .toc ul {
      list-style: none;
      padding-left: 0;
    }

    .toc ul li {
      margin: 10px 0;
    }

    .toc ul li a {
      text-decoration: none;
      color: #0366d6;
    }

    /* Feature list */
    .features {
      padding: 15px;
      background-color: #f5f5f5;
      border: 1px solid #ddd;
      margin-bottom: 20px;
    }

    .features h2 {
      font-size: 1.5em;
      margin-top: 0;
    }

    .features ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    /* Section Headers */
    h2 {
      color: #333;
    }

    /* Screenshots */
    .screenshots img {
      border: 1px solid #ddd;
      padding: 10px;
      margin: 10px;
      max-width: 100%;
      height: auto;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    /* Video Thumbnails */
    .video-thumbnail {
      border: 1px solid #ddd;
      padding: 10px;
      margin: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    /* Download and Support Links */
    .download-link, .support-link {
      display: inline-block;
      padding: 10px 20px;
      margin: 10px 0;
      text-align: center;
      text-decoration: none;
      color: #fff;
      background-color: #28a745;
      border-radius: 5px;
    }

    .support-link {
      background-color: #007bff;
    }

    /* Code blocks */
    code {
      background-color: #f4f4f4;
      border: 1px solid #ddd;
      padding: 2px 5px;
      border-radius: 3px;
      font-family: Consolas, "Courier New", monospace;
    }

    /* Notes */
    .notes {
      background-color: #fcf8e3;
      border: 1px solid #faebcc;
      padding: 15px;
      border-radius: 5px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="banner">
    <img src="https://github.com/hassanalitamam/Wp_Protector/assets/119606428/efe6adf7-1ea0-4198-a8cd-713176c80da7" alt="Banner WP Protector">
  </div>

  <div class="toc">
    <h2>Table of Contents</h2>
    <ul>
      <li><a href="#features">Features</a></li>
      <li><a href="#installation">Installation</a></li>
      <li><a href="#usage">Usage</a></li>
      <li><a href="#settings">Settings</a></li>
      <li><a href="#screenshots">Screenshots</a></li>
      <li><a href="#video-tutorials">Video Tutorials</a></li>
      <li><a href="#download">Download</a></li>
      <li><a href="#support">Support</a></li>
      <li><a href="#changelog">Changelog</a></li>
    </ul>
  </div>

  <h2 id="features">Features</h2>
  <div class="features">
    <ul>
      <li><strong>Disable Copy:</strong> Prevent users from copying content on your website.</li>
      <li><strong>Disable Right-Click:</strong> Prevent users from right-clicking on your website.</li>
      <li><strong>Disable Developer Tools:</strong> Prevent users from using developer tools to inspect your website's code.</li>
      <li><strong>Customizable Settings:</strong> Enable or disable protections globally or on specific pages and posts.</li>
      <li><strong>Selective Activation:</strong> Enable the plugin on specific pages or multiple pages, or on selected articles.</li>
    </ul>
  </div>

  <h2 id="installation">Installation</h2>
  <ol>
    <li><strong>Download:</strong> Download the latest version of WP Protector from the <a href="#download">Download Link</a>.</li>
    <li><strong>Upload:</strong> Go to your WordPress admin area and navigate to <code>Plugins > Add New</code>. Click on the <code>Upload Plugin</code> button and select the downloaded zip file.</li>
    <li><strong>Install:</strong> Click <code>Install Now</code>.</li>
    <li><strong>Activate:</strong> After installation, click on <code>Activate Plugin</code> to activate WP Protector.</li>
  </ol>

  <p>Alternatively, you can install the plugin via FTP:</p>
  <ol>
    <li>Extract the wp-protector.zip file.</li>
    <li>Upload the <code>wp-protector</code> folder to the <code>/wp-content/plugins/</code> directory.</li>
    <li>Activate the plugin through the <code>Plugins</code> menu in WordPress.</li>
  </ol>

  <h2 id="usage">Usage</h2>
  <ol>
    <li><strong>Navigate to WP Protector:</strong> Go to <code>WP Protector</code> in the admin menu.</li>
    <li><strong>Configure Settings:</strong> Customize the plugin settings according to your preferences.</li>
    <li><strong>Save Changes:</strong> Click on <code>Save Changes</code> to apply the settings.</li>
  </ol>

  <h2 id="settings">Settings</h2>
  <h3>General Settings</h3>
  <ul>
    <li><strong>Disable Copy Everywhere:</strong> Check this box to disable copy functionality across the entire site.</li>
    <li><strong>Disable Right Click Everywhere:</strong> Check this box to disable right-click functionality across the entire site.</li>
    <li><strong>Disable Developer Tools Everywhere:</strong> Check this box to disable developer tools across the entire site.</li>
  </ul>

  <h3>Page-Specific Settings</h3>
  <ul>
    <li><strong>Disable Copy on Specific Pages:</strong> Select the pages where you want to disable the copy functionality.</li>
    <li><strong>Disable Right Click on Specific Pages:</strong> Select the pages where you want to disable the right-click functionality.</li>
    <li><strong>Disable Developer Tools on Specific Pages:</strong> Select the pages where you want to disable the developer tools.</li>
  </ul>

  <h3>Post-Specific Settings</h3>
  <ul>
    <li><strong>Disable Copy on Specific Posts:</strong> Select the posts where you want to disable the copy functionality.</li>
    <li><strong>Disable Right Click on Specific Posts:</strong> Select the posts where you want to disable the right-click functionality.</li>
    <li><strong>Disable Developer Tools on Specific Posts:</strong> Select the posts where you want to disable the developer tools.</li>
  </ul>

  <h2 id="screenshots">Screenshots</h2>
  <div class="screenshots">
    <img src="https://example.com/images/wp-protector-settings.png" alt="General Settings">
    <p><em>General Settings Page</em></p>

    <img src="https://example.com/images/wp-protector-page-settings.png" alt="Page-Specific Settings">
    <p><em>Page-Specific Settings</em></p>

    <img src="https://example.com/images/wp-protector-post-settings.png" alt="Post-Specific Settings">
    <p><em>Post-Specific Settings</em></p>
  </div>

  <h2 id="video-tutorials">Video Tutorials</h2>
  <div class="video-thumbnail">
    <a href="https://example.com/videos/install-wp-protector.mp4"><img src="https://example.com/images/install-video-thumbnail.png" alt="Install Video"></
        <p><strong>How to Install WP Protector</strong></p>
    </div>
    <div class="video-thumbnail">
      <a href="https://example.com/videos/configure-wp-protector.mp4"><img src="https://example.com/images/configure-video-thumbnail.png" alt="Configure Video"></a>
      <p><strong>How to Configure Settings</strong></p>
    </div>
    <div class="video-thumbnail">
      <a href="https://example.com/videos/use-wp-protector-settings.mp4"><img src="https://example.com/images/settings-video-thumbnail.png" alt="Settings Video"></a>
      <p><strong>How to Use Page and Post Specific Settings</strong></p>
    </div>
  
    <h2 id="download">Download</h2>
    <a class="download-link" href="https://example.com/downloads/wp-protector.zip">Download WP Protector</a>
  
    <h2 id="support">Support</h2>
    <p>For support and troubleshooting, please visit our <a href="https://example.com/support">support page</a> or contact us directly at <a href="mailto:support@example.com">support@example.com</a>.</p>
  
    <h2 id="changelog">Changelog</h2>
    <div class="notes">
      <h3>1.0.1</h3>
      <ul>
        <li>Initial release with basic protection features.</li>
      </ul>
    </div>
  
    <h2 id="additional-notes">Additional Notes</h2>
    <div class="notes">
      <p><strong>Compatibility:</strong> Make sure your site runs on WordPress 5.2 or higher and PHP 7.2 or higher.</p>
      <p><strong>Security:</strong> Use this plugin responsibly. Disabling right-click and developer tools can frustrate legitimate users and is not a foolproof way to secure content.</p>
    </div>
  </body>
  </html>
  
