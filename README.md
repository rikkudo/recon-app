# recon
install cordova and android studio step by step (on Windows)

    https://evothings.com/doc/build/cordova-install-windows.html
    https://evothings.com/doc/build/cordova-guide.html
    https://cordova.apache.org/docs/en/latest/guide/cli/

install plugin for the app

    cordova plugin add cordova-plugin-geolocation
    cordova plugin add cordova-plugin-inappbrowser
    cordova plugin add cordova-plugin-media-capture
    cordova plugin add cordova-plugin-camera
    cordova plugin add cordova-plugin-file-transfer

afer that, copy all files in here to folder www at your cordova project

before you can install app to your android phone, your phone must be on developer mode after that, you can install through your andorid

check your device at cmd
    adb devices

install apk to your device

    adb install -r platforms\android\app\build\outputs\apk\debug\app-debug.apk
