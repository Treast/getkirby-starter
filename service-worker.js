/**
 * Copyright 2018 Google Inc. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *     http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// If the loader is already loaded, just stop.
if (!self.define) {
  let registry = {};

  // Used for `eval` and `importScripts` where we can't get script URL by other means.
  // In both cases, it's safe to use a global var because those functions are synchronous.
  let nextDefineUri;

  const singleRequire = (uri, parentUri) => {
    uri = new URL(uri + ".js", parentUri).href;
    return registry[uri] || (
      
        new Promise(resolve => {
          if ("document" in self) {
            const script = document.createElement("script");
            script.src = uri;
            script.onload = resolve;
            document.head.appendChild(script);
          } else {
            nextDefineUri = uri;
            importScripts(uri);
            resolve();
          }
        })
      
      .then(() => {
        let promise = registry[uri];
        if (!promise) {
          throw new Error(`Module ${uri} didn’t register its module`);
        }
        return promise;
      })
    );
  };

  self.define = (depsNames, factory) => {
    const uri = nextDefineUri || ("document" in self ? document.currentScript.src : "") || location.href;
    if (registry[uri]) {
      // Module is already loading or loaded.
      return;
    }
    let exports = {};
    const require = depUri => singleRequire(depUri, uri);
    const specialDeps = {
      module: { uri },
      exports,
      require
    };
    registry[uri] = Promise.all(depsNames.map(
      depName => specialDeps[depName] || require(depName)
    )).then(deps => {
      factory(...deps);
      return exports;
    });
  };
}
define(['./workbox-708b2004'], (function (workbox) { 'use strict';

  self.addEventListener('message', event => {
    if (event.data && event.data.type === 'SKIP_WAITING') {
      self.skipWaiting();
    }
  });

  /**
   * The precacheAndRoute() method efficiently caches and responds to
   * requests for URLs in the manifest.
   * See https://goo.gl/S9QRab
   */
  workbox.precacheAndRoute([{
    "url": "/assets/app.js",
    "revision": "3e7bc2fd875247db452985321e4f8497"
  }, {
    "url": "assets/fonts/OpenSans-Bold.eot?baaec7a009f9f87f5b8ff591f7a555de",
    "revision": "669931ebddcaa1240dcbbfef98902da4"
  }, {
    "url": "assets/fonts/OpenSans-Bold.svg?847cec770eeac6bb9909e190dab8d7a0",
    "revision": "8fb516a33b02c1b1a07f15faae482bae"
  }, {
    "url": "assets/fonts/OpenSans-Bold.ttf?b31c7eafef9b5ad6324ea5e1ba2c71d6",
    "revision": "a5fc543f51a75d83628ddb906c3b328a"
  }, {
    "url": "assets/fonts/OpenSans-Bold.woff2?53adcff143a448b00f77ef56911c0449",
    "revision": "43eb9ed2e858a3ccf881102e57a58447"
  }, {
    "url": "assets/fonts/OpenSans-Bold.woff?b37d1709d6c6974c1258c31ddc6db204",
    "revision": "e71687f584b67b923cb112b0c408e717"
  }, {
    "url": "assets/fonts/OpenSans-Regular.eot?df03e9ce2ebcf8fc5ebdc954e8a72f46",
    "revision": "a569ac0720a23a1f94d5b7df0c4cf0e1"
  }, {
    "url": "assets/fonts/OpenSans-Regular.svg?b5ba3723d28577cffb754a051d0357d9",
    "revision": "23bb366fdd4df10f11bbfd30a01e6fa6"
  }, {
    "url": "assets/fonts/OpenSans-Regular.ttf?193203d82e5dd325f0b83c583982d90b",
    "revision": "0507ede052f87cbdb4a4d454acaaf02a"
  }, {
    "url": "assets/fonts/OpenSans-Regular.woff2?4361a1a4c7bcc152b0dd789c61b95958",
    "revision": "28c8ef5f9ee1a7f84b021e1debf92a52"
  }, {
    "url": "assets/fonts/OpenSans-Regular.woff?b92cb4a9aaeffb93908d1f0311203114",
    "revision": "0594f882f65274823faa12f10159c1b6"
  }, {
    "url": "assets/main.css",
    "revision": "ff4164d2109fb657915b813a31322984"
  }], {});

}));
