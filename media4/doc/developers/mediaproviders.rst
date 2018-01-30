.. _mediaproviders:

===============================
MediaProvider Development Guide

Tools
=====

--------
Required
--------
 * `MediaProvider SDK <http://sdk.longtailvideo.com.s3.amazonaws.com/mediaprovider-sdk.zip>`_
 * `Flash Player <http://get.adobe.com/flashplayer/>`_
 * `Flex SDK <http://www.adobe.com/cfusion/entitlement/index.cfm?e=flex4sdk>`_
 * `Ant <http://ant.apache.org/bindownload.cgi>`_
 
Recommended
-----------
 * `Flash Builder 4 <http://www.adobe.com/products/flashbuilder/>`_
 * `Flash Player Debugger version <http://www.adobe.com/support/flashplayer/downloads.html>`_
 * A local web server (http) for testing
 
============


.. image:: ../images/mediaproviders/loading_mediaproviders.png
 :align: center

When the player detects a MediaProvider it does not have, it will attempt to load that MediaProvider either from the MediaProvider repository or from any standard Web Server (Figure 1).

===========================

---------------
Getting Started
---------------


You should rename this file to something a bit more meaningful, like your company's name. Feel free to simply rename the file, or create a new file and copy in the contents of MyMediaProvider.

Be sure to update the name of the class, the name of the constructor function, and the MediaProvider name

.. code-block:: actionscript

	public class MyMediaProvider extends MediaProvider {
			super("myMediaProvider");
		}
	}
	
After you rename the file, you'll still have to make a few changes in build/build.properties order to ensure that everything works smoothly. Specifically
 * application.class - The filename of the actionscript file containing your MediaProvider, e.g. MyMediaProvider
 
------------------------------
Functions, events, and objects
------------------------------

.. image:: ../images/mediaproviders/workflow.png
 :align: center

Your MediaProvider cannot access the player itself. Instead, the player will call methods on your MediaProvider, and it will need to appropriately respond by dispatch events. Figure 2 demonstrates the required workflow.

Functions
---------


++++++++

Required functions are public methods called by the player on the MediaProvider. While required functions are partially implemented by the MediaProvider base class, you will need to add additional logic to make your MediaProvider work, and to distinguish it from other MediaProviders.

 * **play** - Resume playback of the item.
 * **pause** - Pause playback of the item.
 * **seek** - Seek to a certain position in the item.
 * **stop** - Stop playing and loading the item.
 * **setVolume** - Change the playback volume of the item.
 * **mute** - Changes the mute state of the item.
 * **resize** - Resizes the display.
 
+++++++++++


 * **buffer** - Puts the video into a buffer state.
 * **complete** - Completes video playback.
 * **error** - Dispatches error notifications.

+++++++


 * **sendMediaEvent** - Sends a MediaEvent, simultaneously setting a property.
 * **sendBufferEvent** - Dispatches buffer change notifications.
 * **get config** - The current config.
 * **get media** - Gets the graphical representation of the media.
 * **set media** - Sets the graphical representation of the media.
 
------

+++++++++++



.. csv-table:: 
	:header: "Event", 				"Description"
	
	MediaEvent.JWPLAYER_MEDIA_BUFFER, Fired when a portion of the current media has been loaded into the buffer.
	MediaEvent.JWPLAYER_MEDIA_LOADED, Fired after the MediaProvider has successfully set up a connection to the media.
	**PlayerState Events**, 
	PlayerStateEvent.JWPLAYER_PLAYER_STATE, Sent when the playback state has changed.

Your MediaProvider should also notify the player about changes in the media state. The states are enumerated below.

 * PlayerState.IDLE - Nothing happening. No playback and no file in memory.
 * PlayerState.BUFFERING - Buffering; will start to play when the buffer is full.
 * PlayerState.PLAYING - The file is being played back.
 * PlayerState.PAUSED - Playback is paused.
 
-------


 * _position:Number - The current position of the stream.
 * _width:Number - Width of the display object.
 * _height:Number - Height of the display object.

-------------------------------------------------------------------------
MediaProvider configuration: Passing in your own variables and parameters
-------------------------------------------------------------------------


getConfigProperty(). Here is an example configuration of a player which defines MediaProvider-related 

.. code-block:: html

		flashvars='file=video.flv&provider=mymediaprovider&mymediaprovider.application=http: application/' />
		
Playing your Media
------------------


 * loading the visual assets
 * displaying the visual assets at the correct time
 * sizing / resizing the visual assets appropriately
 * deciding when to play and buffer
 * handling seek, stop, pause, mute and volume requests correctly

Preparing your MediaProvider for distribution
=============================================

--------------------------
Testing your MediaProvider
--------------------------


Building the tester
-------------------


Using the tester
----------------

To test your MediaProvider, simply open bin-debug/index.html in any web browser. We recommend that you access this via a local web server because of restrictions in the Flash security model.

--------------------

If you'd like to set up a series of tests configurations, simply add additional examples to debug-template/files/settings.js.

---------------------------------------------
Compiling the MediaProvider distributable SWF
---------------------------------------------

To build a SWF that is ready for distribution, simply run the build-release Ant task. The SWF will appear in bin-release.

 

=============================


 
  * RootReference
  * root
  * stage
  * parent
  * ExternalInterface
  
 * your MediaProvider is tested and working as expected using the provided tester.
 
Submission contents
-------------------


 
  * Your source code
  * Build scripts
  
 

Approval process (QA)
---------------------


 2. We put the MediaProvider into our development environment and test it from within our testing framework.
 3. We will release your MediaProvider and make it available to all sites.
 
-------
Updates
-------

Should you need to make an update to your MediaProvider, it will generally need to go through the same QA process, so please be sure to include all files listed above.