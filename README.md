## Explicit Laravel

### App

* namespace: `Illuminate\Support\Facades`
* from
  ```php
    base_path(); // and other path functions
    \Illuminate\Support\Facades\App::getLocale()
  ```
* to
  ```php
    use Illuminate\Contracts\Foundation\Application;

    final class UploadAvatarHandler
    {
        public function __construct(
            private readonly Application $application
        ) {}
    
        public function store()
        {
            $this->application->basePath();
            $this->application->getLocale();
        }
    }
  ```
