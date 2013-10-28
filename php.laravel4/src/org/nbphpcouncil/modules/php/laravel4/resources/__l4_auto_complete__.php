<?php

/*
 * DO NOT ALTER OR REMOVE COPYRIGHT NOTICES OR THIS HEADER.
 *
 * Copyright 2013 Oracle and/or its affiliates. All rights reserved.
 *
 * Oracle and Java are registered trademarks of Oracle and/or its affiliates.
 * Other names may be trademarks of their respective owners.
 *
 * The contents of this file are subject to the terms of either the GNU
 * General Public License Version 2 only ("GPL") or the Common
 * Development and Distribution License("CDDL") (collectively, the
 * "License"). You may not use this file except in compliance with the
 * License. You can obtain a copy of the License at
 * http://www.netbeans.org/cddl-gplv2.html
 * or nbbuild/licenses/CDDL-GPL-2-CP. See the License for the
 * specific language governing permissions and limitations under the
 * License.  When distributing the software, include this License Header
 * Notice in each file and include the License file at
 * nbbuild/licenses/CDDL-GPL-2-CP.  Oracle designates this
 * particular file as subject to the "Classpath" exception as provided
 * by Oracle in the GPL Version 2 section of the License file that
 * accompanied this code. If applicable, add the following below the
 * License Header, with the fields enclosed by brackets [] replaced by
 * your own identifying information:
 * "Portions Copyrighted [year] [name of copyright owner]"
 *
 * If you wish your version of this file to be governed by only the CDDL
 * or only the GPL Version 2, indicate your decision by adding
 * "[Contributor] elects to include this software in this distribution
 * under the [CDDL or GPL Version 2] license." If you do not indicate a
 * single choice of license, a recipient has the option to distribute
 * your version of this file under either the CDDL, the GPL Version 2 or
 * to extend the choice of license to its licensees as provided above.
 * However, if you add GPL Version 2 code and therefore, elected the GPL
 * Version 2 license, then the option applies only if the new code is
 * made subject to such option by the copyright holder.
 *
 * Contributor(s):
 *
 * Portions Copyrighted 2013 Sun Microsystems, Inc.
 */
die('do not include this file. it is for your IDE only to support auto-completion.');

class App extends Illuminate\Foundation\Application
{

    /**
     * Set the application request for the console environment.
     *
     * @return void
     */
    public static function setRequestForConsoleEnvironment()
    {
        
    }

    /**
     * Redirect the request if it has a trailing slash.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|null
     */
    public static function redirectIfTrailingSlash()
    {
        
    }

    /**
     * Bind the installation paths to the application.
     *
     * @param array $paths
     * @return void
     */
    public static function bindInstallPaths($paths)
    {
        
    }

    /**
     * Get the application bootstrap file.
     *
     * @return string
     */
    public static function getBootstrapFile()
    {
        
    }

    /**
     * Start the exception handling for the request.
     *
     * @return void
     */
    public static function startExceptionHandling()
    {
        
    }

    /**
     * Get the current application environment.
     *
     * @return string
     */
    public static function environment()
    {
        
    }

    /**
     * Detect the application's current environment.
     *
     * @param array|string $environments
     * @return string
     */
    public static function detectEnvironment($environments)
    {
        
    }

    /**
     * Determine if we are running in the console.
     *
     * @return bool
     */
    public static function runningInConsole()
    {
        
    }

    /**
     * Determine if we are running unit tests.
     *
     * @return bool
     */
    public static function runningUnitTests()
    {
        
    }

    /**
     * Register a service provider with the application.
     *
     * @param \Illuminate\Support\ServiceProvider|string $provider
     * @param array $options
     * @return void
     */
    public static function register($provider, $options)
    {
        
    }

    /**
     * Load and boot all of the remaining deferred providers.
     *
     * @return void
     */
    public static function loadDeferredProviders()
    {
        
    }

    /**
     * Resolve the given type from the container.
     *
     * (Overriding Container::make)
     *
     * @param string $abstract
     * @param array $parameters
     * @return mixed
     */
    public static function make($abstract, $parameters)
    {
        
    }

    /**
     * Register a "before" application filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function before($callback)
    {
        
    }

    /**
     * Register an "after" application filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function after($callback)
    {
        
    }

    /**
     * Register a "close" application filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function close($callback)
    {
        
    }

    /**
     * Register a "finish" application filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function finish($callback)
    {
        
    }

    /**
     * Register a "shutdown" callback.
     *
     * @param callable $callback
     * @return void
     */
    public static function shutdown($callback)
    {
        
    }

    /**
     * Handles the given request and delivers the response.
     *
     * @return void
     */
    public static function run()
    {
        
    }

    /**
     * Handle the given request and get the response.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function dispatch($request)
    {
        
    }

    /**
     * Handle the given request and get the response.
     *
     * Provides compatibility with BrowserKit functional testing.
     *
     * @implements HttpKernelInterface::handle
     *
     * @param \Illuminate\Http\Request $request
     * @param int $type
     * @param bool $catch
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function handle($request, $type, $catch)
    {
        
    }

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public static function boot()
    {
        
    }

    /**
     * Register a new boot listener.
     *
     * @param mixed $callback
     * @return void
     */
    public static function booting($callback)
    {
        
    }

    /**
     * Register a new "booted" listener.
     *
     * @param mixed $callback
     * @return void
     */
    public static function booted($callback)
    {
        
    }

    /**
     * Prepare the request by injecting any services.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Request
     */
    public static function prepareRequest($request)
    {
        
    }

    /**
     * Prepare the given value as a Response object.
     *
     * @param mixed $value
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function prepareResponse($value)
    {
        
    }

    /**
     * Determine if the application is currently down for maintenance.
     *
     * @return bool
     */
    public static function isDownForMaintenance()
    {
        
    }

    /**
     * Register a maintenance mode event listener.
     *
     * @param \Closure $callback
     * @return void
     */
    public static function down($callback)
    {
        
    }

    /**
     * Throw an HttpException with the given data.
     *
     * @param int $code
     * @param string $message
     * @param array $headers
     * @return void
     */
    public static function abort($code, $message, $headers)
    {
        
    }

    /**
     * Register a 404 error handler.
     *
     * @param Closure $callback
     * @return void
     */
    public static function missing($callback)
    {
        
    }

    /**
     * Register an application error handler.
     *
     * @param Closure $callback
     * @return void
     */
    public static function error($callback)
    {
        
    }

    /**
     * Register an error handler for fatal errors.
     *
     * @param Closure $callback
     * @return void
     */
    public static function fatal($callback)
    {
        
    }

    /**
     * Get the configuration loader instance.
     *
     * @return \Illuminate\Config\LoaderInterface
     */
    public static function getConfigLoader()
    {
        
    }

    /**
     * Get the service provider repository instance.
     *
     * @return \Illuminate\Foundation\ProviderRepository
     */
    public static function getProviderRepository()
    {
        
    }

    /**
     * Set the current application locale.
     *
     * @param string $locale
     * @return void
     */
    public static function setLocale($locale)
    {
        
    }

    /**
     * Get the service providers that have been loaded.
     *
     * @return array
     */
    public static function getLoadedProviders()
    {
        
    }

    /**
     * Set the application's deferred services.
     *
     * @param array $services
     * @return void
     */
    public static function setDeferredServices($services)
    {
        
    }

    /**
     * Determine if the given abstract type has been bound.
     *
     * @param string $abstract
     * @return bool
     */
    public static function bound($abstract)
    {
        
    }

    /**
     * Register a binding with the container.
     *
     * @param string $abstract
     * @param Closure|string|null $concrete
     * @param bool $shared
     * @return void
     */
    public static function bind($abstract, $concrete, $shared)
    {
        
    }

    /**
     * Register a binding if it hasn't already been registered.
     *
     * @param string $abstract
     * @param Closure|string|null $concrete
     * @param bool $shared
     * @return bool
     */
    public static function bindIf($abstract, $concrete, $shared)
    {
        
    }

    /**
     * Register a shared binding in the container.
     *
     * @param string $abstract
     * @param Closure|string|null $concrete
     * @return void
     */
    public static function singleton($abstract, $concrete)
    {
        
    }

    /**
     * Wrap a Closure such that it is shared.
     *
     * @param Closure $closure
     * @return Closure
     */
    public static function share($closure)
    {
        
    }

    /**
     * "Extend" an abstract type in the container.
     *
     * @param string $abstract
     * @param Closure $closure
     * @return void
     */
    public static function extend($abstract, $closure)
    {
        
    }

    /**
     * Register an existing instance as shared in the container.
     *
     * @param string $abstract
     * @param mixed $instance
     * @return void
     */
    public static function instance($abstract, $instance)
    {
        
    }

    /**
     * Alias a type to a shorter name.
     *
     * @param string $abstract
     * @param string $alias
     * @return void
     */
    public static function alias($abstract, $alias)
    {
        
    }

    /**
     * Instantiate a concrete instance of the given type.
     *
     * @param string $concrete
     * @param array $parameters
     * @return mixed
     */
    public static function build($concrete, $parameters)
    {
        
    }

    /**
     * Register a new resolving callback.
     *
     * @param Closure $callback
     * @return void
     */
    public static function resolving($callback)
    {
        
    }

    /**
     * Get the container's bindings.
     *
     * @return array
     */
    public static function getBindings()
    {
        
    }

    /**
     * Determine if a given offset exists.
     *
     * @param string $key
     * @return bool
     */
    public static function offsetExists($key)
    {
        
    }

    /**
     * Get the value at a given offset.
     *
     * @param string $key
     * @return mixed
     */
    public static function offsetGet($key)
    {
        
    }

    /**
     * Set the value at a given offset.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function offsetSet($key, $value)
    {
        
    }

    /**
     * Unset the value at a given offset.
     *
     * @param string $key
     * @return void
     */
    public static function offsetUnset($key)
    {
        
    }
}

class Artisan extends Illuminate\Foundation\Artisan
{

    /**
     * Run an Artisan console command by name.
     *
     * @param string $command
     * @param array $parameters
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return void
     */
    public static function call($command, $parameters, $output)
    {
        
    }
}

class Auth extends Illuminate\Auth\Guard
{

    /**
     * Determine if the current user is authenticated.
     *
     * @return bool
     */
    public static function check()
    {
        
    }

    /**
     * Determine if the current user is a guest.
     *
     * @return bool
     */
    public static function guest()
    {
        
    }

    /**
     * Get the currently authenticated user.
     *
     * @return \Illuminate\Auth\UserInterface|null
     */
    public static function user()
    {
        
    }

    /**
     * Log a user into the application without sessions or cookies.
     *
     * @param array $credentials
     * @return bool
     */
    public static function once($credentials)
    {
        
    }

    /**
     * Validate a user's credentials.
     *
     * @param array $credentials
     * @return bool
     */
    public static function validate($credentials)
    {
        
    }

    /**
     * Attempt to authenticate using HTTP Basic Auth.
     *
     * @param string $field
     * @param \Symfony\Component\HttpFoundation\Request $request 
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public static function basic($field, $request)
    {
        
    }

    /**
     * Perform a stateless HTTP Basic login attempt.
     *
     * @param string $field
     * @param \Symfony\Component\HttpFoundation\Request $request 
     * @return \Symfony\Component\HttpFoundation\Response|null
     */
    public static function onceBasic($field, $request)
    {
        
    }

    /**
     * Attempt to authenticate a user using the given credentials.
     *
     * @param array $credentials
     * @param bool $remember
     * @param bool $login
     * @return bool
     */
    public static function attempt($credentials, $remember, $login)
    {
        
    }

    /**
     * Register an authentication attempt event listener.
     *
     * @param mixed $callback
     * @return void
     */
    public static function attempting($callback)
    {
        
    }

    /**
     * Log a user into the application.
     *
     * @param \Illuminate\Auth\UserInterface $user
     * @param bool $remember
     * @return void
     */
    public static function login($user, $remember)
    {
        
    }

    /**
     * Log the given user ID into the application.
     *
     * @param mixed $id
     * @param bool $remember
     * @return \Illuminate\Auth\UserInterface
     */
    public static function loginUsingId($id, $remember)
    {
        
    }

    /**
     * Log the user out of the application.
     *
     * @return void
     */
    public static function logout()
    {
        
    }

    /**
     * Get the cookies queued by the guard.
     *
     * @return array
     */
    public static function getQueuedCookies()
    {
        
    }

    /**
     * Get the cookie creator instance used by the guard.
     *
     * @return \Illuminate\Cookie\CookieJar
     */
    public static function getCookieJar()
    {
        
    }

    /**
     * Set the cookie creator instance used by the guard.
     *
     * @param \Illuminate\Cookie\CookieJar $cookie
     * @return void
     */
    public static function setCookieJar($cookie)
    {
        
    }

    /**
     * Get the event dispatcher instance.
     *
     * @return \Illuminate\Events\Dispatcher
     */
    public static function getDispatcher()
    {
        
    }

    /**
     * Set the event dispatcher instance.
     *
     * @param \Illuminate\Events\Dispatcher
     */
    public static function setDispatcher()
    {
        
    }

    /**
     * Get the session store used by the guard.
     *
     * @return \Illuminate\Session\Store
     */
    public static function getSession()
    {
        
    }

    /**
     * Get the user provider used by the guard.
     *
     * @return \Illuminate\Auth\UserProviderInterface
     */
    public static function getProvider()
    {
        
    }

    /**
     * Return the currently cached user of the application.
     *
     * @return \Illuminate\Auth\UserInterface|null
     */
    public static function getUser()
    {
        
    }

    /**
     * Set the current user of the application.
     *
     * @param \Illuminate\Auth\UserInterface $user
     * @return void
     */
    public static function setUser($user)
    {
        
    }

    /**
     * Get the current request instance.
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public static function getRequest()
    {
        
    }

    /**
     * Set the current request instance.
     *
     * @param \Symfony\Component\HttpFoundation\Request
     * @return \Illuminate\Auth\Guard
     */
    public static function setRequest()
    {
        
    }

    /**
     * Get a unique identifier for the auth session value.
     *
     * @return string
     */
    public static function getName()
    {
        
    }

    /**
     * Get the name of the cookie used to store the "recaller".
     *
     * @return string
     */
    public static function getRecallerName()
    {
        
    }
}

class Blade extends Illuminate\View\Compilers\BladeCompiler
{

    /**
     * Compile the view at the given path.
     *
     * @param string $path
     * @return void
     */
    public static function compile($path)
    {
        
    }

    /**
     * Compile the given Blade template contents.
     *
     * @param string $value
     * @return string
     */
    public static function compileString($value)
    {
        
    }

    /**
     * Register a custom Blade compiler.
     *
     * @param Closure $compiler
     * @return void
     */
    public static function extend($compiler)
    {
        
    }

    /**
     * Get the regular expression for a generic Blade function.
     *
     * @param string $function
     * @return string
     */
    public static function createMatcher($function)
    {
        
    }

    /**
     * Get the regular expression for a generic Blade function.
     *
     * @param string $function
     * @return string
     */
    public static function createOpenMatcher($function)
    {
        
    }

    /**
     * Create a plain Blade matcher.
     *
     * @param string $function
     * @return string
     */
    public static function createPlainMatcher($function)
    {
        
    }

    /**
     * Sets the content tags used for the compiler.
     *
     * @param string $openTag
     * @param string $closeTag
     * @param bool $escaped
     * @return void
     */
    public static function setContentTags($openTag, $closeTag, $escaped)
    {
        
    }

    /**
     * Sets the escaped content tags used for the compiler.
     *
     * @param string $openTag
     * @param string $closeTag
     * @return void
     */
    public static function setEscapedContentTags($openTag, $closeTag)
    {
        
    }

    /**
     * Get the path to the compiled version of a view.
     *
     * @param string $path
     * @return string
     */
    public static function getCompiledPath($path)
    {
        
    }

    /**
     * Determine if the view at the given path is expired.
     *
     * @param string $path
     * @return bool
     */
    public static function isExpired($path)
    {
        
    }
}

class Cache extends Illuminate\Cache\CacheManager
{

    /**
     * Get a driver instance.
     *
     * @param string $driver
     * @return mixed
     */
    public static function driver($driver)
    {
        
    }

    /**
     * Register a custom driver creator Closure.
     *
     * @param string $driver
     * @param Closure $callback
     * @return void
     */
    public static function extend($driver, $callback)
    {
        
    }

    /**
     * Get all of the created "drivers".
     *
     * @return array
     */
    public static function getDrivers()
    {
        
    }
}

class ClassLoader extends Illuminate\Support\ClassLoader
{
    
}

class Config extends Illuminate\Config\Repository
{

    /**
     * Determine if the given configuration value exists.
     *
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        
    }

    /**
     * Determine if a configuration group exists.
     *
     * @param string $key
     * @return bool
     */
    public static function hasGroup($key)
    {
        
    }

    /**
     * Get the specified configuration value.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default)
    {
        
    }

    /**
     * Set a given configuration value.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        
    }

    /**
     * Register a package for cascading configuration.
     *
     * @param string $package
     * @param string $hint
     * @param string $namespace
     * @return void
     */
    public static function package($package, $hint, $namespace)
    {
        
    }

    /**
     * Register an after load callback for a given namespace.
     *
     * @param string $namespace
     * @param Closure $callback
     * @return void
     */
    public static function afterLoading($namespace, $callback)
    {
        
    }

    /**
     * Add a new namespace to the loader.
     *
     * @param string $namespace
     * @param string $hint
     * @return void
     */
    public static function addNamespace($namespace, $hint)
    {
        
    }

    /**
     * Returns all registered namespaces with the config
     * loader.
     *
     * @return array
     */
    public static function getNamespaces()
    {
        
    }

    /**
     * Get the loader implementation.
     *
     * @return \Illuminate\Config\LoaderInterface
     */
    public static function getLoader()
    {
        
    }

    /**
     * Set the loader implementation.
     *
     * @param \Illuminate\Config\LoaderInterface $loader
     * @return void
     */
    public static function setLoader($loader)
    {
        
    }

    /**
     * Get the current configuration environment.
     *
     * @return string
     */
    public static function getEnvironment()
    {
        
    }

    /**
     * Get the after load callback array.
     *
     * @return array
     */
    public static function getAfterLoadCallbacks()
    {
        
    }

    /**
     * Get all of the configuration items.
     *
     * @return array
     */
    public static function getItems()
    {
        
    }

    /**
     * Determine if the given configuration option exists.
     *
     * @param string $key
     * @return bool
     */
    public static function offsetExists($key)
    {
        
    }

    /**
     * Get a configuration option.
     *
     * @param string $key
     * @return bool
     */
    public static function offsetGet($key)
    {
        
    }

    /**
     * Set a configuration option.
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public static function offsetSet($key, $value)
    {
        
    }

    /**
     * Unset a configuration option.
     *
     * @param string $key
     * @return void
     */
    public static function offsetUnset($key)
    {
        
    }

    /**
     * Parse a key into namespace, group, and item.
     *
     * @param string $key
     * @return array
     */
    public static function parseKey($key)
    {
        
    }

    /**
     * Set the parsed value of a key.
     *
     * @param string $key
     * @param array $parsed
     * @return void
     */
    public static function setParsedKey($key, $parsed)
    {
        
    }
}

class Controller extends Illuminate\Routing\Controllers\Controller
{
    
}

class Cookie extends Illuminate\Cookie\CookieJar
{

    /**
     * Determine if a cookie exists and is not null.
     *
     * @param string $key
     * @return bool
     */
    public static function has($key)
    {
        
    }

    /**
     * Get the value of the given cookie.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default)
    {
        
    }

    /**
     * Create a new cookie instance.
     *
     * @param string $name
     * @param string $value
     * @param int $minutes
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httpOnly
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public static function make($name, $value, $minutes, $path, $domain, $secure, $httpOnly)
    {
        
    }

    /**
     * Create a cookie that lasts "forever" (five years).
     *
     * @param string $name
     * @param string $value
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httpOnly
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public static function forever($name, $value, $path, $domain, $secure, $httpOnly)
    {
        
    }

    /**
     * Expire the given cookie.
     *
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public static function forget($name)
    {
        
    }

    /**
     * Set the default path and domain for the jar.
     *
     * @param string $path
     * @param string $domain
     * @return void
     */
    public static function setDefaultPathAndDomain($path, $domain)
    {
        
    }

    /**
     * Get the request instance.
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public static function getRequest()
    {
        
    }

    /**
     * Get the encrypter instance.
     *
     * @return \Illuminate\Encryption\Encrypter
     */
    public static function getEncrypter()
    {
        
    }
}

class Crypt extends Illuminate\Encryption\Encrypter
{

    /**
     * Encrypt the given value.
     *
     * @param string $value
     * @return string
     */
    public static function encrypt($value)
    {
        
    }

    /**
     * Decrypt the given value.
     *
     * @param string $payload
     * @return string
     */
    public static function decrypt($payload)
    {
        
    }

    /**
     * Set the encryption key.
     *
     * @param string $key
     * @return void
     */
    public static function setKey($key)
    {
        
    }

    /**
     * Set the encryption cipher.
     *
     * @param string $cipher
     * @return void
     */
    public static function setCipher($cipher)
    {
        
    }

    /**
     * Set the encryption mode.
     *
     * @param string $mode
     * @return void
     */
    public static function setMode($mode)
    {
        
    }
}

class DB extends Illuminate\Database\Query\Builder
{

    /**
     * Set the columns to be selected.
     *
     * @param array $columns
     * @return \Illuminate\Database\Query\Builder
     */
    public static function select($columns)
    {
        
    }

    /**
     * Add a new select column to the query.
     *
     * @param mixed $column
     * @return \Illuminate\Database\Query\Builder
     */
    public static function addSelect($column)
    {
        
    }

    /**
     * Force the query to only return distinct results.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public static function distinct()
    {
        
    }

    /**
     * Set the table which the query is targeting.
     *
     * @param string $table
     * @return \Illuminate\Database\Query\Builder
     */
    public static function from($table)
    {
        
    }

    /**
     * Add a join clause to the query.
     *
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $second
     * @param string $type
     * @return \Illuminate\Database\Query\Builder
     */
    public static function join($table, $first, $operator, $second, $type)
    {
        
    }

    /**
     * Add a left join to the query.
     *
     * @param string $table
     * @param string $first
     * @param string $operator
     * @param string $second
     * @return \Illuminate\Database\Query\Builder
     */
    public static function leftJoin($table, $first, $operator, $second)
    {
        
    }

    /**
     * Add a basic where clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function where($column, $operator, $value, $boolean)
    {
        
    }

    /**
     * Add an "or where" clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhere($column, $operator, $value)
    {
        
    }

    /**
     * Add a raw where clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereRaw($sql, $bindings, $boolean)
    {
        
    }

    /**
     * Add a raw or where clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereRaw($sql, $bindings)
    {
        
    }

    /**
     * Add a where between statement to the query.
     *
     * @param string $column
     * @param array $values
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereBetween($column, $values, $boolean)
    {
        
    }

    /**
     * Add an or where between statement to the query.
     *
     * @param string $column
     * @param array $values
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereBetween($column, $values)
    {
        
    }

    /**
     * Add a nested where statement to the query.
     *
     * @param Closure $callback
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereNested($callback, $boolean)
    {
        
    }

    /**
     * Add an exists clause to the query.
     *
     * @param Closure $callback
     * @param string $boolean
     * @param bool $not
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereExists($callback, $boolean, $not)
    {
        
    }

    /**
     * Add an or exists clause to the query.
     *
     * @param Closure $callback
     * @param bool $not
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereExists($callback, $not)
    {
        
    }

    /**
     * Add a where not exists clause to the query.
     *
     * @param Closure $calback
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereNotExists($calback, $boolean)
    {
        
    }

    /**
     * Add a where not exists clause to the query.
     *
     * @param Closure $calback
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereNotExists($calback)
    {
        
    }

    /**
     * Add a "where in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @param string $boolean
     * @param bool $not
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereIn($column, $values, $boolean, $not)
    {
        
    }

    /**
     * Add an "or where in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereIn($column, $values)
    {
        
    }

    /**
     * Add a "where not in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereNotIn($column, $values, $boolean)
    {
        
    }

    /**
     * Add an "or where not in" clause to the query.
     *
     * @param string $column
     * @param mixed $values
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereNotIn($column, $values)
    {
        
    }

    /**
     * Add a "where null" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @param bool $not
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereNull($column, $boolean, $not)
    {
        
    }

    /**
     * Add an "or where null" clause to the query.
     *
     * @param string $column
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereNull($column)
    {
        
    }

    /**
     * Add a "where not null" clause to the query.
     *
     * @param string $column
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function whereNotNull($column, $boolean)
    {
        
    }

    /**
     * Add an "or where not null" clause to the query.
     *
     * @param string $column
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orWhereNotNull($column)
    {
        
    }

    /**
     * Handles dynamic "where" clauses to the query.
     *
     * @param string $method
     * @param string $parameters
     * @return \Illuminate\Database\Query\Builder
     */
    public static function dynamicWhere($method, $parameters)
    {
        
    }

    /**
     * Add a "group by" clause to the query.
     *
     * @param dynamic $columns
     * @return \Illuminate\Database\Query\Builder
     */
    public static function groupBy($columns)
    {
        
    }

    /**
     * Add a "having" clause to the query.
     *
     * @param string $column
     * @param string $operator
     * @param string $value
     * @return \Illuminate\Database\Query\Builder
     */
    public static function having($column, $operator, $value)
    {
        
    }

    /**
     * Add a raw having clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @param string $boolean
     * @return \Illuminate\Database\Query\Builder
     */
    public static function havingRaw($sql, $bindings, $boolean)
    {
        
    }

    /**
     * Add a raw or having clause to the query.
     *
     * @param string $sql
     * @param array $bindings
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orHavingRaw($sql, $bindings)
    {
        
    }

    /**
     * Add an "order by" clause to the query.
     *
     * @param string $column
     * @param string $direction
     * @return \Illuminate\Database\Query\Builder
     */
    public static function orderBy($column, $direction)
    {
        
    }

    /**
     * Set the "offset" value of the query.
     *
     * @param int $value
     * @return \Illuminate\Database\Query\Builder
     */
    public static function skip($value)
    {
        
    }

    /**
     * Set the "limit" value of the query.
     *
     * @param int $value
     * @return \Illuminate\Database\Query\Builder
     */
    public static function take($value)
    {
        
    }

    /**
     * Set the limit and offset for a given page.
     *
     * @param int $page
     * @param int $perPage
     * @return \Illuminate\Database\Query\Builder
     */
    public static function forPage($page, $perPage)
    {
        
    }

    /**
     * Add a union statement to the query.
     *
     * @param \Illuminate\Database\Query\Builder|\Closure $query
     * @param bool $all
     * @return \Illuminate\Database\Query\Builder
     */
    public static function union($query, $all)
    {
        
    }

    /**
     * Add a union all statement to the query.
     *
     * @param \Illuminate\Database\Query\Builder|\Closure $query
     * @return \Illuminate\Database\Query\Builder
     */
    public static function unionAll($query)
    {
        
    }

    /**
     * Get the SQL representation of the query.
     *
     * @return string
     */
    public static function toSql()
    {
        
    }

    /**
     * Indicate that the query results should be cached.
     *
     * @param int $minutes
     * @param string $key
     * @return \Illuminate\Database\Query\Builder
     */
    public static function remember($minutes, $key)
    {
        
    }

    /**
     * Execute a query for a single record by ID.
     *
     * @param int $id
     * @param array $columns
     * @return mixed
     */
    public static function find($id, $columns)
    {
        
    }

    /**
     * Pluck a single column from the database.
     *
     * @param string $column
     * @return mixed
     */
    public static function pluck($column)
    {
        
    }

    /**
     * Execute the query and get the first result.
     *
     * @param array $columns
     * @return mixed
     */
    public static function first($columns)
    {
        
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param array $columns
     * @return array
     */
    public static function get($columns)
    {
        
    }

    /**
     * Execute the query as a fresh "select" statement.
     *
     * @param array $columns
     * @return array
     */
    public static function getFresh($columns)
    {
        
    }

    /**
     * Execute the query as a cached "select" statement.
     *
     * @param array $columns
     * @return array
     */
    public static function getCached($columns)
    {
        
    }

    /**
     * Get a unique cache key for the complete query.
     *
     * @return string
     */
    public static function getCacheKey()
    {
        
    }

    /**
     * Generate the unique cache key for the query.
     *
     * @return string
     */
    public static function generateCacheKey()
    {
        
    }

    /**
     * Get an array with the values of a given column.
     *
     * @param string $column
     * @param string $key
     * @return array
     */
    public static function lists($column, $key)
    {
        
    }

    /**
     * Get a paginator for the "select" statement.
     *
     * @param int $perPage
     * @param array $columns
     * @return \Illuminate\Pagination\Paginator
     */
    public static function paginate($perPage, $columns)
    {
        
    }

    /**
     * Build a paginator instance from a raw result array.
     *
     * @param \Illuminate\Pagination\Environment $paginator
     * @param array $results
     * @param int $perPage
     * @return \Illuminate\Pagination\Paginator
     */
    public static function buildRawPaginator($paginator, $results, $perPage)
    {
        
    }

    /**
     * Get the count of the total records for pagination.
     *
     * @return int
     */
    public static function getPaginationCount()
    {
        
    }

    /**
     * Determine if any rows exist for the current query.
     *
     * @return bool
     */
    public static function exists()
    {
        
    }

    /**
     * Retrieve the "count" result of the query.
     *
     * @param string $column
     * @return int
     */
    public static function count($column)
    {
        
    }

    /**
     * Retrieve the minimum value of a given column.
     *
     * @param string $column
     * @return mixed
     */
    public static function min($column)
    {
        
    }

    /**
     * Retrieve the maximum value of a given column.
     *
     * @param string $column
     * @return mixed
     */
    public static function max($column)
    {
        
    }

    /**
     * Retrieve the sum of the values of a given column.
     *
     * @param string $column
     * @return mixed
     */
    public static function sum($column)
    {
        
    }

    /**
     * Retrieve the average of the values of a given column.
     *
     * @param string $column
     * @return mixed
     */
    public static function avg($column)
    {
        
    }

    /**
     * Execute an aggregate function on the database.
     *
     * @param string $function
     * @param array $columns
     * @return mixed
     */
    public static function aggregate($function, $columns)
    {
        
    }

    /**
     * Insert a new record into the database.
     *
     * @param array $values
     * @return bool
     */
    public static function insert($values)
    {
        
    }

    /**
     * Insert a new record and get the value of the primary key.
     *
     * @param array $values
     * @param string $sequence
     * @return int
     */
    public static function insertGetId($values, $sequence)
    {
        
    }

    /**
     * Update a record in the database.
     *
     * @param array $values
     * @return int
     */
    public static function update($values)
    {
        
    }

    /**
     * Increment a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    public static function increment($column, $amount, $extra)
    {
        
    }

    /**
     * Decrement a column's value by a given amount.
     *
     * @param string $column
     * @param int $amount
     * @param array $extra
     * @return int
     */
    public static function decrement($column, $amount, $extra)
    {
        
    }

    /**
     * Delete a record from the database.
     *
     * @param mixed $id
     * @return int
     */
    public static function delete($id)
    {
        
    }

    /**
     * Run a truncate statement on the table.
     *
     * @return void
     */
    public static function truncate()
    {
        
    }

    /**
     * Get a new instance of the query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public static function newQuery()
    {
        
    }

    /**
     * Merge an array of where clauses and bindings.
     *
     * @param array $wheres
     * @param array $bindings
     * @return void
     */
    public static function mergeWheres($wheres, $bindings)
    {
        
    }

    /**
     * Get a copy of the where clauses and bindings in an array.
     *
     * @return array
     */
    public static function getAndResetWheres()
    {
        
    }

    /**
     * Create a raw database expression.
     *
     * @param mixed $value
     * @return \Illuminate\Database\Query\Expression
     */
    public static function raw($value)
    {
        
    }

    /**
     * Get the current query value bindings.
     *
     * @return array
     */
    public static function getBindings()
    {
        
    }

    /**
     * Set the bindings on the query builder.
     *
     * @param array $bindings
     * @return void
     */
    public static function setBindings($bindings)
    {
        
    }

    /**
     * Merge an array of bindings into our bindings.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @return \Illuminate\Database\Query\Builder
     */
    public static function mergeBindings($query)
    {
        
    }

    /**
     * Get the database connection instance.
     *
     * @return \Illuminate\Database\ConnectionInterface
     */
    public static function getConnection()
    {
        
    }

    /**
     * Get the database query processor instance.
     *
     * @return \Illuminate\Database\Query\Processors\Processor
     */
    public static function getProcessor()
    {
        
    }

    /**
     * Get the query grammar instance.
     *
     * @return \Illuminate\Database\Grammar
     */
    public static function getGrammar()
    {
        
    }
}

abstract class Eloquent extends Illuminate\Database\Eloquent\Model
{
    
}

class Event extends Illuminate\Events\Dispatcher
{

    /**
     * Register an event listener with the dispatcher.
     *
     * @param string $event
     * @param mixed $listener
     * @param int $priority
     * @return void
     */
    public static function listen($event, $listener, $priority)
    {
        
    }

    /**
     * Determine if a given event has listeners.
     *
     * @param string $eventName
     * @return bool
     */
    public static function hasListeners($eventName)
    {
        
    }

    /**
     * Register a queued event and payload.
     *
     * @param string $event
     * @param array $payload
     * @return void
     */
    public static function queue($event, $payload)
    {
        
    }

    /**
     * Register an event subscriber with the dispatcher.
     *
     * @param string $subscriber
     * @return void
     */
    public static function subscribe($subscriber)
    {
        
    }

    /**
     * Fire an event until the first non-null response is returned.
     *
     * @param string $event
     * @param array $payload
     * @return mixed
     */
    public static function until($event, $payload)
    {
        
    }

    /**
     * Flush a set of queued events.
     *
     * @param string $event
     * @return void
     */
    public static function flush($event)
    {
        
    }

    /**
     * Fire an event and call the listeners.
     *
     * @param string $event
     * @param mixed $payload
     * @param boolean $halt
     * @return void
     */
    public static function fire($event, $payload, $halt)
    {
        
    }

    /**
     * Get all of the listeners for a given event name.
     *
     * @param string $eventName
     * @return array
     */
    public static function getListeners($eventName)
    {
        
    }

    /**
     * Register an event listener with the dispatcher.
     *
     * @param mixed $listener
     * @return void
     */
    public static function makeListener($listener)
    {
        
    }

    /**
     * Create a class based listener using the IoC container.
     *
     * @param mixed $listener
     * @return Closure
     */
    public static function createClassListener($listener)
    {
        
    }

    /**
     * Remove a set of listeners from the dispatcher.
     *
     * @param string $event
     * @return void
     */
    public static function forget($event)
    {
        
    }
}

class File extends Illuminate\Filesystem\Filesystem
{

    /**
     * Determine if a file exists.
     *
     * @param string $path
     * @return bool
     */
    public static function exists($path)
    {
        
    }

    /**
     * Get the contents of a file.
     *
     * @param string $path
     * @return string
     */
    public static function get($path)
    {
        
    }

    /**
     * Get the contents of a remote file.
     *
     * @param string $path
     * @return string
     */
    public static function getRemote($path)
    {
        
    }

    /**
     * Get the returned value of a file.
     *
     * @param string $path
     * @return mixed
     */
    public static function getRequire($path)
    {
        
    }

    /**
     * Require the given file once.
     *
     * @param string $file
     * @return void
     */
    public static function requireOnce($file)
    {
        
    }

    /**
     * Write the contents of a file.
     *
     * @param string $path
     * @param string $contents
     * @return int
     */
    public static function put($path, $contents)
    {
        
    }

    /**
     * Append to a file.
     *
     * @param string $path
     * @param string $data
     * @return int
     */
    public static function append($path, $data)
    {
        
    }

    /**
     * Delete the file at a given path.
     *
     * @param string $path
     * @return bool
     */
    public static function delete($path)
    {
        
    }

    /**
     * Move a file to a new location.
     *
     * @param string $path
     * @param string $target
     * @return void
     */
    public static function move($path, $target)
    {
        
    }

    /**
     * Copy a file to a new location.
     *
     * @param string $path
     * @param string $target
     * @return void
     */
    public static function copy($path, $target)
    {
        
    }

    /**
     * Extract the file extension from a file path.
     * 
     * @param string $path
     * @return string
     */
    public static function extension($path)
    {
        
    }

    /**
     * Get the file type of a given file.
     *
     * @param string $path
     * @return string
     */
    public static function type($path)
    {
        
    }

    /**
     * Get the file size of a given file.
     *
     * @param string $path
     * @return int
     */
    public static function size($path)
    {
        
    }

    /**
     * Get the file's last modification time.
     *
     * @param string $path
     * @return int
     */
    public static function lastModified($path)
    {
        
    }

    /**
     * Determine if the given path is a directory.
     *
     * @param string $directory
     * @return bool
     */
    public static function isDirectory($directory)
    {
        
    }

    /**
     * Determine if the given path is writable.
     *
     * @param string $path
     * @return bool
     */
    public static function isWritable($path)
    {
        
    }

    /**
     * Determine if the given path is a file.
     *
     * @param string $file
     * @return bool
     */
    public static function isFile($file)
    {
        
    }

    /**
     * Find path names matching a given pattern.
     *
     * @param string $pattern
     * @param int $flags
     * @return array
     */
    public static function glob($pattern, $flags)
    {
        
    }

    /**
     * Get an array of all files in a directory.
     *
     * @param string $directory
     * @return array
     */
    public static function files($directory)
    {
        
    }

    /**
     * Get all of the files from the given directory (recursive).
     *
     * @param string $directory
     * @return array
     */
    public static function allFiles($directory)
    {
        
    }

    /**
     * Get all of the directories within a given directory.
     *
     * @param string $directory
     * @return array
     */
    public static function directories($directory)
    {
        
    }

    /**
     * Create a directory.
     *
     * @param string $path
     * @param int $mode
     * @param bool $recursive
     * @return bool
     */
    public static function makeDirectory($path, $mode, $recursive)
    {
        
    }

    /**
     * Copy a directory from one location to another.
     *
     * @param string $directory
     * @param string $destination
     * @param int $options
     * @return void
     */
    public static function copyDirectory($directory, $destination, $options)
    {
        
    }

    /**
     * Recursively delete a directory.
     *
     * The directory itself may be optionally preserved.
     *
     * @param string $directory
     * @param bool $preserve
     * @return void
     */
    public static function deleteDirectory($directory, $preserve)
    {
        
    }

    /**
     * Empty the specified directory of all files and folders.
     *
     * @param string $directory
     * @return void
     */
    public static function cleanDirectory($directory)
    {
        
    }
}

class Form extends Illuminate\Html\FormBuilder
{

    /**
     * Open up a new HTML form.
     *
     * @param array $options
     * @return string
     */
    public static function open($options)
    {
        
    }

    /**
     * Create a new model based form builder.
     *
     * @param mixed $model
     * @param array $options
     * @return string
     */
    public static function model($model, $options)
    {
        
    }

    /**
     * Close the current form.
     *
     * @return string
     */
    public static function close()
    {
        
    }

    /**
     * Generate a hidden field with the current CSRF token.
     *
     * @return string
     */
    public static function token()
    {
        
    }

    /**
     * Create a form label element.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function label($name, $value, $options)
    {
        
    }

    /**
     * Create a form input field.
     *
     * @param string $type
     * @param string $name
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function input($type, $name, $value, $options)
    {
        
    }

    /**
     * Create a text input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function text($name, $value, $options)
    {
        
    }

    /**
     * Create a password input field.
     *
     * @param string $name
     * @param array $options
     * @return string
     */
    public static function password($name, $options)
    {
        
    }

    /**
     * Create a hidden input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function hidden($name, $value, $options)
    {
        
    }

    /**
     * Create an e-mail input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function email($name, $value, $options)
    {
        
    }

    /**
     * Create a file input field.
     *
     * @param string $name
     * @param array $options
     * @return string
     */
    public static function file($name, $options)
    {
        
    }

    /**
     * Create a textarea input field.
     *
     * @param string $name
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function textarea($name, $value, $options)
    {
        
    }

    /**
     * Create a select box field.
     *
     * @param string $name
     * @param array $list
     * @param string $selected
     * @param array $options
     * @return string
     */
    public static function select($name, $list, $selected, $options)
    {
        
    }

    /**
     * Create a checkbox input field.
     *
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     * @param array $options
     * @return string
     */
    public static function checkbox($name, $value, $checked, $options)
    {
        
    }

    /**
     * Create a radio button input field.
     *
     * @param string $name
     * @param mixed $value
     * @param bool $checked
     * @param array $options
     * @return string
     */
    public static function radio($name, $value, $checked, $options)
    {
        
    }

    /**
     * Create a HTML reset input element.
     *
     * @param string $value
     * @param array $attributes
     * @return string
     */
    public static function reset($value, $attributes)
    {
        
    }

    /**
     * Create a HTML image input element.
     *
     * @param string $url
     * @param string $name
     * @param array $attributes
     * @return string
     */
    public static function image($url, $name, $attributes)
    {
        
    }

    /**
     * Create a submit button element.
     *
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function submit($value, $options)
    {
        
    }

    /**
     * Create a button element.
     *
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function button($value, $options)
    {
        
    }

    /**
     * Register a custom form macro.
     *
     * @param string $name
     * @param callable $macro
     * @return void
     */
    public static function macro($name, $macro)
    {
        
    }

    /**
     * Get the value that should be assigned to the field.
     *
     * @param string $name
     * @param string $value
     * @return string
     */
    public static function getValueAttribute($name, $value)
    {
        
    }

    /**
     * Get the session store implementation.
     *
     * @return \Illuminate\Session\Store $session
     */
    public static function getSessionStore()
    {
        
    }

    /**
     * Set the session store implementation.
     *
     * @param \Illuminate\Session\Store $session
     * @return \Illuminate\Html\FormBuilder
     */
    public static function setSessionStore($session)
    {
        
    }
}

class Hash extends Illuminate\Hashing\BcryptHasher
{

    /**
     * Hash the given value.
     *
     * @param string $value
     * @param array $options
     * @return string
     */
    public static function make($value, $options)
    {
        
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param string $value
     * @param string $hashedValue
     * @param array $options
     * @return bool
     */
    public static function check($value, $hashedValue, $options)
    {
        
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param string $hashedValue
     * @param array $options
     * @return bool
     */
    public static function needsRehash($hashedValue, $options)
    {
        
    }
}

class HTML extends Illuminate\Html\HtmlBuilder
{

    /**
     * Register a custom HTML macro.
     *
     * @param string $name
     * @param callable $macro
     * @return void
     */
    public static function macro($name, $macro)
    {
        
    }

    /**
     * Convert an HTML string to entities.
     *
     * @param string $value
     * @return string
     */
    public static function entities($value)
    {
        
    }

    /**
     * Convert entities to HTML characters.
     *
     * @param string $value
     * @return string
     */
    public static function decode($value)
    {
        
    }

    /**
     * Generate a link to a JavaScript file.
     *
     * @param string $url
     * @param array $attributes
     * @return string
     */
    public static function script($url, $attributes)
    {
        
    }

    /**
     * Generate a link to a CSS file.
     *
     * @param string $url
     * @param array $attributes
     * @return string
     */
    public static function style($url, $attributes)
    {
        
    }

    /**
     * Generate an HTML image element.
     *
     * @param string $url
     * @param string $alt
     * @param array $attributes
     * @return string
     */
    public static function image($url, $alt, $attributes)
    {
        
    }

    /**
     * Generate a HTML link.
     *
     * @param string $url
     * @param string $title
     * @param array $attributes
     * @param bool $secure
     * @return string
     */
    public static function link($url, $title, $attributes, $secure)
    {
        
    }

    /**
     * Generate a HTTPS HTML link.
     *
     * @param string $url
     * @param string $title
     * @param array $attributes
     * @return string
     */
    public static function secureLink($url, $title, $attributes)
    {
        
    }

    /**
     * Generate a HTML link to an asset.
     *
     * @param string $url
     * @param string $title
     * @param array $attributes
     * @param bool $secure
     * @return string
     */
    public static function linkAsset($url, $title, $attributes, $secure)
    {
        
    }

    /**
     * Generate a HTTPS HTML link to an asset.
     *
     * @param string $url
     * @param string $title
     * @param array $attributes
     * @return string
     */
    public static function linkSecureAsset($url, $title, $attributes)
    {
        
    }

    /**
     * Generate a HTML link to a named route.
     *
     * @param string $name
     * @param string $title
     * @param array $parameters
     * @param array $attributes
     * @return string
     */
    public static function linkRoute($name, $title, $parameters, $attributes)
    {
        
    }

    /**
     * Generate a HTML link to a controller action.
     *
     * @param string $action
     * @param string $title
     * @param array $parameters
     * @param array $attributes
     * @return string
     */
    public static function linkAction($action, $title, $parameters, $attributes)
    {
        
    }

    /**
     * Generate a HTML link to an email address.
     * 
     * @param string $email
     * @param string $title
     * @param array $attributes
     * @return string
     */
    public static function mailto($email, $title, $attributes)
    {
        
    }

    /**
     * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
     *
     * @param string $email
     * @return string
     */
    public static function email($email)
    {
        
    }

    /**
     * Generate an ordered list of items.
     *
     * @param array $list
     * @param array $attributes
     * @return string
     */
    public static function ol($list, $attributes)
    {
        
    }

    /**
     * Generate an un-ordered list of items.
     *
     * @param array $list
     * @param array $attributes
     * @return string
     */
    public static function ul($list, $attributes)
    {
        
    }

    /**
     * Build an HTML attribute string from an array.
     *
     * @param array $attributes
     * @return string
     */
    public static function attributes($attributes)
    {
        
    }

    /**
     * Obfuscate a string to prevent spam-bots from sniffing it.
     *
     * @param string $value
     * @return string
     */
    public static function obfuscate($value)
    {
        
    }
}

class Input extends Illuminate\Http\Request
{

    /**
     * Return the Request instance.
     *
     * @return \Illuminate\Http\Request
     */
    public static function instance()
    {
        
    }

    /**
     * Get the root URL for the application.
     *
     * @return string
     */
    public static function root()
    {
        
    }

    /**
     * Get the URL (no query string) for the request.
     *
     * @return string
     */
    public static function url()
    {
        
    }

    /**
     * Get the full URL for the request.
     *
     * @return string
     */
    public static function fullUrl()
    {
        
    }

    /**
     * Get the current path info for the request.
     *
     * @return string
     */
    public static function path()
    {
        
    }

    /**
     * Get a segment from the URI (1 based index).
     *
     * @param string $index
     * @param mixed $default
     * @return string
     */
    public static function segment($index, $default)
    {
        
    }

    /**
     * Get all of the segments for the request path.
     *
     * @return array
     */
    public static function segments()
    {
        
    }

    /**
     * Determine if the current request URI matches a pattern.
     *
     * @param string $pattern
     * @return bool
     */
    public static function is($pattern)
    {
        
    }

    /**
     * Determine if the request is the result of an AJAX call.
     * 
     * @return bool
     */
    public static function ajax()
    {
        
    }

    /**
     * Determine if the request is over HTTPS.
     *
     * @return bool
     */
    public static function secure()
    {
        
    }

    /**
     * Determine if the request contains a given input item.
     *
     * @param string|array $key
     * @return bool
     */
    public static function has($key)
    {
        
    }

    /**
     * Get all of the input and files for the request.
     *
     * @return array
     */
    public static function all()
    {
        
    }

    /**
     * Retrieve an input item from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function input($key, $default)
    {
        
    }

    /**
     * Get a subset of the items from the input data.
     *
     * @param array $keys
     * @return array
     */
    public static function only($keys)
    {
        
    }

    /**
     * Get all of the input except for a specified array of items.
     *
     * @param array $keys
     * @return array
     */
    public static function except($keys)
    {
        
    }

    /**
     * Retrieve a query string item from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function query($key, $default)
    {
        
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function cookie($key, $default)
    {
        
    }

    /**
     * Retrieve a file from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public static function file($key, $default)
    {
        
    }

    /**
     * Determine if the uploaded data contains a file.
     *
     * @param string $key
     * @return bool
     */
    public static function hasFile($key)
    {
        
    }

    /**
     * Retrieve a header from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function header($key, $default)
    {
        
    }

    /**
     * Retrieve a server variable from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function server($key, $default)
    {
        
    }

    /**
     * Retrieve an old input item.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function old($key, $default)
    {
        
    }

    /**
     * Flash the input for the current request to the session.
     *
     * @param string $filter
     * @param array $keys
     * @return void
     */
    public static function flash($filter, $keys)
    {
        
    }

    /**
     * Flash only some of the input to the session.
     *
     * @param dynamic string
     * @return void
     */
    public static function flashOnly()
    {
        
    }

    /**
     * Flash only some of the input to the session.
     *
     * @param dynamic string
     * @return void
     */
    public static function flashExcept()
    {
        
    }

    /**
     * Flush all of the old input from the session.
     *
     * @return void
     */
    public static function flush()
    {
        
    }

    /**
     * Merge new input into the current request's input array.
     *
     * @param array $input
     * @return void
     */
    public static function merge($input)
    {
        
    }

    /**
     * Replace the input for the current request.
     *
     * @param array $input
     * @return void
     */
    public static function replace($input)
    {
        
    }

    /**
     * Get the JSON payload for the request.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function json($key, $default)
    {
        
    }

    /**
     * Determine if the request is sending JSON.
     *
     * @return bool
     */
    public static function isJson()
    {
        
    }

    /**
     * Determine if the current request is asking for JSON in return.
     *
     * @return bool
     */
    public static function wantsJson()
    {
        
    }

    /**
     * Get the Illuminate session store implementation.
     *
     * @return \Illuminate\Session\Store
     */
    public static function getSessionStore()
    {
        
    }

    /**
     * Set the Illuminate session store implementation.
     *
     * @param \Illuminate\Session\Store $session
     * @return void
     */
    public static function setSessionStore($session)
    {
        
    }

    /**
     * Determine if the session store has been set.
     *
     * @return bool
     */
    public static function hasSessionStore()
    {
        
    }

    /**
     * Sets the parameters for this request.
     *
     * This method also re-initializes all properties.
     *
     * @param array $query The GET parameters
     * @param array $request The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies The COOKIE parameters
     * @param array $files The FILES parameters
     * @param array $server The SERVER parameters
     * @param string $content The raw body data
     *
     * @api
     */
    public static function initialize($query, $request, $attributes, $cookies, $files, $server, $content)
    {
        
    }

    /**
     * Creates a new request with values from PHP's super globals.
     *
     * @return Request A new request
     *
     * @api
     */
    public static function createFromGlobals()
    {
        
    }

    /**
     * Creates a Request based on a given URI and configuration.
     *
     * The information contained in the URI always take precedence
     * over the other information (server and parameters).
     *
     * @param string $uri The URI
     * @param string $method The HTTP method
     * @param array $parameters The query (GET) or request (POST) parameters
     * @param array $cookies The request cookies ($_COOKIE)
     * @param array $files The request files ($_FILES)
     * @param array $server The server parameters ($_SERVER)
     * @param string $content The raw body data
     *
     * @return Request A Request instance
     *
     * @api
     */
    public static function create($uri, $method, $parameters, $cookies, $files, $server, $content)
    {
        
    }

    /**
     * Clones a request and overrides some of its parameters.
     *
     * @param array $query The GET parameters
     * @param array $request The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies The COOKIE parameters
     * @param array $files The FILES parameters
     * @param array $server The SERVER parameters
     *
     * @return Request The duplicated request
     *
     * @api
     */
    public static function duplicate($query, $request, $attributes, $cookies, $files, $server)
    {
        
    }

    /**
     * Overrides the PHP global variables according to this request instance.
     *
     * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
     * $_FILES is never override, see rfc1867
     *
     * @api
     */
    public static function overrideGlobals()
    {
        
    }

    /**
     * Sets a list of trusted proxies.
     *
     * You should only list the reverse proxies that you manage directly.
     *
     * @param array $proxies A list of trusted proxies
     *
     * @api
     */
    public static function setTrustedProxies($proxies)
    {
        
    }

    /**
     * Gets the list of trusted proxies.
     *
     * @return array An array of trusted proxies.
     */
    public static function getTrustedProxies()
    {
        
    }

    /**
     * Sets the name for trusted headers.
     *
     * The following header keys are supported:
     *
     * * Request::HEADER_CLIENT_IP: defaults to X-Forwarded-For (see getClientIp())
     * * Request::HEADER_CLIENT_HOST: defaults to X-Forwarded-Host (see getClientHost())
     * * Request::HEADER_CLIENT_PORT: defaults to X-Forwarded-Port (see getClientPort())
     * * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
     *
     * Setting an empty value allows to disable the trusted header for the given key.
     *
     * @param string $key The header key
     * @param string $value The header name
     *
     * @throws \InvalidArgumentException
     */
    public static function setTrustedHeaderName($key, $value)
    {
        
    }

    /**
     * Gets the trusted proxy header name.
     *
     * @param string $key The header key
     *
     * @return string The header name
     *
     * @throws \InvalidArgumentException
     */
    public static function getTrustedHeaderName($key)
    {
        
    }

    /**
     * Normalizes a query string.
     *
     * It builds a normalized query string, where keys/value pairs are alphabetized,
     * have consistent escaping and unneeded delimiters are removed.
     *
     * @param string $qs Query string
     *
     * @return string A normalized query string for the Request
     */
    public static function normalizeQueryString($qs)
    {
        
    }

    /**
     * Enables support for the _method request parameter to determine the intended HTTP method.
     *
     * Be warned that enabling this feature might lead to CSRF issues in your code.
     * Check that you are using CSRF tokens when required.
     *
     * The HTTP method can only be overridden when the real HTTP method is POST.
     */
    public static function enableHttpMethodParameterOverride()
    {
        
    }

    /**
     * Checks whether support for the _method request parameter is enabled.
     *
     * @return Boolean True when the _method request parameter is enabled, false otherwise
     */
    public static function getHttpMethodParameterOverride()
    {
        
    }

    /**
     * Gets a "parameter" value.
     *
     * This method is mainly useful for libraries that want to provide some flexibility.
     *
     * Order of precedence: GET, PATH, POST
     *
     * Avoid using this method in controllers:
     *
     * * slow
     * * prefer to get from a "named" source
     *
     * It is better to explicitly get request parameters from the appropriate
     * public property instead (query, attributes, request).
     *
     * @param string $key the key
     * @param mixed $default the default value
     * @param Boolean $deep is parameter deep in multidimensional array
     *
     * @return mixed
     */
    public static function get($key, $default, $deep)
    {
        
    }

    /**
     * Gets the Session.
     *
     * @return SessionInterface|null The session
     *
     * @api
     */
    public static function getSession()
    {
        
    }

    /**
     * Whether the request contains a Session which was started in one of the
     * previous requests.
     *
     * @return Boolean
     *
     * @api
     */
    public static function hasPreviousSession()
    {
        
    }

    /**
     * Whether the request contains a Session object.
     *
     * This method does not give any information about the state of the session object,
     * like whether the session is started or not. It is just a way to check if this Request
     * is associated with a Session instance.
     *
     * @return Boolean true when the Request contains a Session object, false otherwise
     *
     * @api
     */
    public static function hasSession()
    {
        
    }

    /**
     * Sets the Session.
     *
     * @param SessionInterface $session The Session
     *
     * @api
     */
    public static function setSession($session)
    {
        
    }

    /**
     * Returns the client IP addresses.
     *
     * The most trusted IP address is first, and the less trusted one last.
     * The "real" client IP address is the last one, but this is also the
     * less trusted one.
     *
     * Use this method carefully; you should use getClientIp() instead.
     *
     * @return array The client IP addresses
     *
     * @see getClientIp()
     */
    public static function getClientIps()
    {
        
    }

    /**
     * Returns the client IP address.
     *
     * This method can read the client IP address from the "X-Forwarded-For" header
     * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
     * header value is a comma+space separated list of IP addresses, the left-most
     * being the original client, and each successive proxy that passed the request
     * adding the IP address where it received the request from.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-For",
     * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
     * the "client-ip" key.
     *
     * @return string The client IP address
     *
     * @see getClientIps()
     * @see http://en.wikipedia.org/wiki/X-Forwarded-For
     *
     * @api
     */
    public static function getClientIp()
    {
        
    }

    /**
     * Returns current script name.
     *
     * @return string
     *
     * @api
     */
    public static function getScriptName()
    {
        
    }

    /**
     * Returns the path being requested relative to the executed script.
     *
     * The path info always starts with a /.
     *
     * Suppose this request is instantiated from /mysite on localhost:
     *
     * * http://localhost/mysite returns an empty string
     * * http://localhost/mysite/about returns '/about'
     * * http://localhost/mysite/enco%20ded returns '/enco%20ded'
     * * http://localhost/mysite/about?var=1 returns '/about'
     *
     * @return string The raw path (i.e. not urldecoded)
     *
     * @api
     */
    public static function getPathInfo()
    {
        
    }

    /**
     * Returns the root path from which this request is executed.
     *
     * Suppose that an index.php file instantiates this request object:
     *
     * * http://localhost/index.php returns an empty string
     * * http://localhost/index.php/page returns an empty string
     * * http://localhost/web/index.php returns '/web'
     * * http://localhost/we%20b/index.php returns '/we%20b'
     *
     * @return string The raw path (i.e. not urldecoded)
     *
     * @api
     */
    public static function getBasePath()
    {
        
    }

    /**
     * Returns the root url from which this request is executed.
     *
     * The base URL never ends with a /.
     *
     * This is similar to getBasePath(), except that it also includes the
     * script filename (e.g. index.php) if one exists.
     *
     * @return string The raw url (i.e. not urldecoded)
     *
     * @api
     */
    public static function getBaseUrl()
    {
        
    }

    /**
     * Gets the request's scheme.
     *
     * @return string
     *
     * @api
     */
    public static function getScheme()
    {
        
    }

    /**
     * Returns the port on which the request is made.
     *
     * This method can read the client port from the "X-Forwarded-Port" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Port" header must contain the client port.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-Port",
     * configure it via "setTrustedHeaderName()" with the "client-port" key.
     *
     * @return string
     *
     * @api
     */
    public static function getPort()
    {
        
    }

    /**
     * Returns the user.
     *
     * @return string|null
     */
    public static function getUser()
    {
        
    }

    /**
     * Returns the password.
     *
     * @return string|null
     */
    public static function getPassword()
    {
        
    }

    /**
     * Gets the user info.
     *
     * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
     */
    public static function getUserInfo()
    {
        
    }

    /**
     * Returns the HTTP host being requested.
     *
     * The port name will be appended to the host if it's non-standard.
     *
     * @return string
     *
     * @api
     */
    public static function getHttpHost()
    {
        
    }

    /**
     * Returns the requested URI.
     *
     * @return string The raw URI (i.e. not urldecoded)
     *
     * @api
     */
    public static function getRequestUri()
    {
        
    }

    /**
     * Gets the scheme and HTTP host.
     *
     * If the URL was called with basic authentication, the user
     * and the password are not added to the generated string.
     *
     * @return string The scheme and HTTP host
     */
    public static function getSchemeAndHttpHost()
    {
        
    }

    /**
     * Generates a normalized URI for the Request.
     *
     * @return string A normalized URI for the Request
     *
     * @see getQueryString()
     *
     * @api
     */
    public static function getUri()
    {
        
    }

    /**
     * Generates a normalized URI for the given path.
     *
     * @param string $path A path to use instead of the current one
     *
     * @return string The normalized URI for the path
     *
     * @api
     */
    public static function getUriForPath($path)
    {
        
    }

    /**
     * Generates the normalized query string for the Request.
     *
     * It builds a normalized query string, where keys/value pairs are alphabetized
     * and have consistent escaping.
     *
     * @return string|null A normalized query string for the Request
     *
     * @api
     */
    public static function getQueryString()
    {
        
    }

    /**
     * Checks whether the request is secure or not.
     *
     * This method can read the client port from the "X-Forwarded-Proto" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
     * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
     * the "client-proto" key.
     *
     * @return Boolean
     *
     * @api
     */
    public static function isSecure()
    {
        
    }

    /**
     * Returns the host name.
     *
     * This method can read the client port from the "X-Forwarded-Host" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Host" header must contain the client host name.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-Host",
     * configure it via "setTrustedHeaderName()" with the "client-host" key.
     *
     * @return string
     *
     * @throws \UnexpectedValueException when the host name is invalid
     *
     * @api
     */
    public static function getHost()
    {
        
    }

    /**
     * Sets the request method.
     *
     * @param string $method
     *
     * @api
     */
    public static function setMethod($method)
    {
        
    }

    /**
     * Gets the request "intended" method.
     *
     * If the X-HTTP-Method-Override header is set, and if the method is a POST,
     * then it is used to determine the "real" intended HTTP method.
     *
     * The _method request parameter can also be used to determine the HTTP method,
     * but only if enableHttpMethodParameterOverride() has been called.
     *
     * The method is always an uppercased string.
     *
     * @return string The request method
     *
     * @api
     *
     * @see getRealMethod
     */
    public static function getMethod()
    {
        
    }

    /**
     * Gets the "real" request method.
     *
     * @return string The request method
     *
     * @see getMethod
     */
    public static function getRealMethod()
    {
        
    }

    /**
     * Gets the mime type associated with the format.
     *
     * @param string $format The format
     *
     * @return string The associated mime type (null if not found)
     *
     * @api
     */
    public static function getMimeType($format)
    {
        
    }

    /**
     * Gets the format associated with the mime type.
     *
     * @param string $mimeType The associated mime type
     *
     * @return string|null The format (null if not found)
     *
     * @api
     */
    public static function getFormat($mimeType)
    {
        
    }

    /**
     * Associates a format with mime types.
     *
     * @param string $format The format
     * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
     *
     * @api
     */
    public static function setFormat($format, $mimeTypes)
    {
        
    }

    /**
     * Gets the request format.
     *
     * Here is the process to determine the format:
     *
     * * format defined by the user (with setRequestFormat())
     * * _format request parameter
     * * $default
     *
     * @param string $default The default format
     *
     * @return string The request format
     *
     * @api
     */
    public static function getRequestFormat($default)
    {
        
    }

    /**
     * Sets the request format.
     *
     * @param string $format The request format.
     *
     * @api
     */
    public static function setRequestFormat($format)
    {
        
    }

    /**
     * Gets the format associated with the request.
     *
     * @return string|null The format (null if no content type is present)
     *
     * @api
     */
    public static function getContentType()
    {
        
    }

    /**
     * Sets the default locale.
     *
     * @param string $locale
     *
     * @api
     */
    public static function setDefaultLocale($locale)
    {
        
    }

    /**
     * Sets the locale.
     *
     * @param string $locale
     *
     * @api
     */
    public static function setLocale($locale)
    {
        
    }

    /**
     * Get the locale.
     *
     * @return string
     */
    public static function getLocale()
    {
        
    }

    /**
     * Checks if the request method is of specified type.
     *
     * @param string $method Uppercase request method (GET, POST etc).
     *
     * @return Boolean
     */
    public static function isMethod($method)
    {
        
    }

    /**
     * Checks whether the method is safe or not.
     *
     * @return Boolean
     *
     * @api
     */
    public static function isMethodSafe()
    {
        
    }

    /**
     * Returns the request body content.
     *
     * @param Boolean $asResource If true, a resource will be returned
     *
     * @return string|resource The request body content or a resource to read the body stream.
     *
     * @throws \LogicException
     */
    public static function getContent($asResource)
    {
        
    }

    /**
     * Gets the Etags.
     *
     * @return array The entity tags
     */
    public static function getETags()
    {
        
    }

    /**
     * @return Boolean
     */
    public static function isNoCache()
    {
        
    }

    /**
     * Returns the preferred language.
     *
     * @param array $locales An array of ordered available locales
     *
     * @return string|null The preferred locale
     *
     * @api
     */
    public static function getPreferredLanguage($locales)
    {
        
    }

    /**
     * Gets a list of languages acceptable by the client browser.
     *
     * @return array Languages ordered in the user browser preferences
     *
     * @api
     */
    public static function getLanguages()
    {
        
    }

    /**
     * Gets a list of charsets acceptable by the client browser.
     *
     * @return array List of charsets in preferable order
     *
     * @api
     */
    public static function getCharsets()
    {
        
    }

    /**
     * Gets a list of content types acceptable by the client browser
     *
     * @return array List of content types in preferable order
     *
     * @api
     */
    public static function getAcceptableContentTypes()
    {
        
    }

    /**
     * Returns true if the request is a XMLHttpRequest.
     *
     * It works if your JavaScript library set an X-Requested-With HTTP header.
     * It is known to work with common JavaScript frameworks:
     * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
     *
     * @return Boolean true if the request is an XMLHttpRequest, false otherwise
     *
     * @api
     */
    public static function isXmlHttpRequest()
    {
        
    }
}

class Lang extends Illuminate\Translation\Translator
{

    /**
     * Determine if a translation exists.
     *
     * @param string $key
     * @param string $locale
     * @return bool
     */
    public static function has($key, $locale)
    {
        
    }

    /**
     * Get the translation for the given key.
     *
     * @param string $key
     * @param array $replace
     * @param string $locale
     * @return string
     */
    public static function get($key, $replace, $locale)
    {
        
    }

    /**
     * Get a translation according to an integer value.
     *
     * @param string $key
     * @param int $number
     * @param array $replace
     * @param string $locale
     * @return string
     */
    public static function choice($key, $number, $replace, $locale)
    {
        
    }

    /**
     * Get the translation for a given key.
     *
     * @param string $id
     * @param array $parameters
     * @param string $domain
     * @param string $locale
     * @return string
     */
    public static function trans($id, $parameters, $domain, $locale)
    {
        
    }

    /**
     * Get a translation according to an integer value.
     *
     * @param string $id
     * @param int $number
     * @param array $parameters
     * @param string $domain
     * @param string $locale
     * @return string
     */
    public static function transChoice($id, $number, $parameters, $domain, $locale)
    {
        
    }

    /**
     * Load the specified language group.
     *
     * @param string $namespace
     * @param string $group
     * @param string $locale
     * @return string
     */
    public static function load($namespace, $group, $locale)
    {
        
    }

    /**
     * Add a new namespace to the loader.
     *
     * @param string $namespace
     * @param string $hint
     * @return void
     */
    public static function addNamespace($namespace, $hint)
    {
        
    }

    /**
     * Parse a key into namespace, group, and item.
     *
     * @param string $key
     * @return array
     */
    public static function parseKey($key)
    {
        
    }

    /**
     * Get the message selector instance.
     *
     * @return \Symfony\Component\Translation\MessageSelector
     */
    public static function getSelector()
    {
        
    }

    /**
     * Set the message selector instance.
     *
     * @param \Symfony\Component\Translation\MessageSelector $selector
     * @return void
     */
    public static function setSelector($selector)
    {
        
    }

    /**
     * Get the language line loader implementation.
     *
     * @return \Illuminate\Translation\LoaderInterface
     */
    public static function getLoader()
    {
        
    }

    /**
     * Get the default locale being used.
     *
     * @return string
     */
    public static function locale()
    {
        
    }

    /**
     * Get the default locale being used.
     *
     * @return string
     */
    public static function getLocale()
    {
        
    }

    /**
     * Set the default locale.
     *
     * @param string $locale
     * @return void
     */
    public static function setLocale($locale)
    {
        
    }

    /**
     * Set the parsed value of a key.
     *
     * @param string $key
     * @param array $parsed
     * @return void
     */
    public static function setParsedKey($key, $parsed)
    {
        
    }
}

class Log extends Illuminate\Log\Writer
{

    /**
     * Register a file log handler.
     *
     * @param string $path
     * @param string $level
     * @return void
     */
    public static function useFiles($path, $level)
    {
        
    }

    /**
     * Register a daily file log handler.
     *
     * @param string $path
     * @param int $days
     * @param string $level
     * @return void
     */
    public static function useDailyFiles($path, $days, $level)
    {
        
    }

    /**
     * Get the underlying Monolog instance.
     *
     * @return \Monolog\Logger
     */
    public static function getMonolog()
    {
        
    }

    /**
     * Register a new callback handler for when
     * a log event is triggered.
     *
     * @param Closure $callback
     * @return void
     */
    public static function listen($callback)
    {
        
    }

    /**
     * Get the event dispatcher instance.
     *
     * @return \Illuminate\Events\Dispatcher
     */
    public static function getEventDispatcher()
    {
        
    }

    /**
     * Set the event dispatcher instance.
     *
     * @param \Illuminate\Events\Dispatcher
     * @return void
     */
    public static function setEventDispatcher()
    {
        
    }
}

class Mail extends Illuminate\Mail\Mailer
{

    /**
     * Set the global from address and name.
     *
     * @param string $address
     * @param string $name
     * @return void
     */
    public static function alwaysFrom($address, $name)
    {
        
    }

    /**
     * Send a new message when only a plain part.
     *
     * @param string $view
     * @param array $data
     * @param mixed $callback
     * @return void
     */
    public static function plain($view, $data, $callback)
    {
        
    }

    /**
     * Send a new message using a view.
     *
     * @param string|array $view
     * @param array $data
     * @param Closure|string $callback
     * @return void
     */
    public static function send($view, $data, $callback)
    {
        
    }

    /**
     * Queue a new e-mail message for sending.
     *
     * @param string|array $view
     * @param array $data
     * @param Closure|string $callback
     * @param string $queue
     * @return void
     */
    public static function queue($view, $data, $callback, $queue)
    {
        
    }

    /**
     * Queue a new e-mail message for sending on the given queue.
     *
     * @param string|array $view
     * @param array $data
     * @param Closure|string $callback
     * @param string $queue
     * @return void
     */
    public static function queueOn($view, $data, $callback, $queue)
    {
        
    }

    /**
     * Queue a new e-mail message for sending after (n) seconds.
     *
     * @param int $delay
     * @param string|array $view
     * @param array $data
     * @param Closure|string $callback
     * @param string $queue
     * @return void
     */
    public static function later($delay, $view, $data, $callback, $queue)
    {
        
    }

    /**
     * Queue a new e-mail message for sending after (n) seconds on the given queue.
     *
     * @param string $queue
     * @param int $delay
     * @param string|array $view
     * @param array $data
     * @param Closure|string $callback
     * @return void
     */
    public static function laterOn($queue, $delay, $view, $data, $callback)
    {
        
    }

    /**
     * Handle a queued e-mail message job.
     *
     * @param \Illuminate\Queue\Jobs\Job $job
     * @param array $data
     * @return void
     */
    public static function handleQueuedMessage($job, $data)
    {
        
    }

    /**
     * Tell the mailer to not really send messages.
     *
     * @param bool $value
     * @return void
     */
    public static function pretend($value)
    {
        
    }

    /**
     * Get the view environment instance.
     *
     * @return \Illuminate\View\Environment
     */
    public static function getViewEnvironment()
    {
        
    }

    /**
     * Get the Swift Mailer instance.
     *
     * @return Swift_Mailer
     */
    public static function getSwiftMailer()
    {
        
    }

    /**
     * Set the Swift Mailer instance.
     *
     * @param Swift_Mailer $swift
     * @return void
     */
    public static function setSwiftMailer($swift)
    {
        
    }

    /**
     * Set the log writer instance.
     *
     * @param \Illuminate\Log\Writer $logger
     * @return \Illuminate\Mail\Mailer
     */
    public static function setLogger($logger)
    {
        
    }

    /**
     * Set the queue manager instance.
     *
     * @param \Illuminate\Queue\QueueManager $queue
     * @return \Illuminate\Mail\Mailer
     */
    public static function setQueue($queue)
    {
        
    }

    /**
     * Set the IoC container instance.
     *
     * @param \Illuminate\Container\Container $container
     * @return void
     */
    public static function setContainer($container)
    {
        
    }
}

class Paginator extends Illuminate\Pagination\Environment
{

    /**
     * Get a new paginator instance.
     *
     * @param array $items
     * @param int $perPage
     * @param int $total
     * @return \Illuminate\Pagination\Paginator
     */
    public static function make($items, $perPage, $total)
    {
        
    }

    /**
     * Get the pagination view.
     *
     * @param \Illuminate\Pagination\Paginator $paginator
     * @return \Illuminate\View\View
     */
    public static function getPaginationView($paginator)
    {
        
    }

    /**
     * Get the number of the current page.
     *
     * @return int
     */
    public static function getCurrentPage()
    {
        
    }

    /**
     * Set the number of the current page.
     *
     * @param int $number
     * @return void
     */
    public static function setCurrentPage($number)
    {
        
    }

    /**
     * Get the root URL for the request.
     *
     * @return string
     */
    public static function getCurrentUrl()
    {
        
    }

    /**
     * Set the base URL in use by the paginator.
     *
     * @param string $baseUrl
     * @return void
     */
    public static function setBaseUrl($baseUrl)
    {
        
    }

    /**
     * Set the input page parameter name used by the paginator.
     *
     * @param string $pageName
     * @return void
     */
    public static function setPageName($pageName)
    {
        
    }

    /**
     * Get the input page parameter name used by the paginator.
     *
     * @return string
     */
    public static function getPageName()
    {
        
    }

    /**
     * Get the name of the pagination view.
     *
     * @return string
     */
    public static function getViewName()
    {
        
    }

    /**
     * Set the name of the pagination view.
     *
     * @param string $viewName
     * @return void
     */
    public static function setViewName($viewName)
    {
        
    }

    /**
     * Get the locale of the paginator.
     *
     * @return string
     */
    public static function getLocale()
    {
        
    }

    /**
     * Set the locale of the paginator.
     *
     * @param string $locale
     * @return void
     */
    public static function setLocale($locale)
    {
        
    }

    /**
     * Get the active request instance.
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public static function getRequest()
    {
        
    }

    /**
     * Set the active request instance.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return void
     */
    public static function setRequest($request)
    {
        
    }

    /**
     * Get the current view driver.
     *
     * @return \Illuminate\View\Environment
     */
    public static function getViewDriver()
    {
        
    }

    /**
     * Set the current view driver.
     *
     * @param \Illuminate\View\Environment $view
     * @return void
     */
    public static function setViewDriver($view)
    {
        
    }

    /**
     * Get the translator instance.
     *
     * @return \Symfony\Component\Translation\TranslatorInterface
     */
    public static function getTranslator()
    {
        
    }
}

class Password extends Illuminate\Auth\Reminders\PasswordBroker
{

    /**
     * Send a password reminder to a user.
     *
     * @param array $credentials
     * @param Closure $callback
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function remind($credentials, $callback)
    {
        
    }

    /**
     * Send the password reminder e-mail.
     *
     * @param \Illuminate\Auth\Reminders\RemindableInterface $user
     * @param string $token
     * @param Closure $callback
     * @return void
     */
    public static function sendReminder($user, $token, $callback)
    {
        
    }

    /**
     * Reset the password for the given token.
     *
     * @param array $credentials
     * @param Closure $callback
     * @return mixed
     */
    public static function reset($credentials, $callback)
    {
        
    }

    /**
     * Get the user for the given credentials.
     *
     * @param array $credentials
     * @return \Illuminate\Auth\Reminders\RemindableInterface
     */
    public static function getUser($credentials)
    {
        
    }
}

class Queue extends Illuminate\Queue\QueueManager
{

    /**
     * Resolve a queue connection instance.
     *
     * @param string $name
     * @return \Illuminate\Queue\QueueInterface
     */
    public static function connection($name)
    {
        
    }

    /**
     * Add a queue connection resolver.
     *
     * @param string $driver
     * @param Closure $resolver
     * @return void
     */
    public static function addConnector($driver, $resolver)
    {
        
    }
}

class Redirect extends Illuminate\Routing\Redirector
{

    /**
     * Create a new redirect response to the "home" route.
     *
     * @param int $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function home($status)
    {
        
    }

    /**
     * Create a new redirect response to the previous location.
     *
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function back($status, $headers)
    {
        
    }

    /**
     * Create a new redirect response to the current URI.
     *
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function refresh($status, $headers)
    {
        
    }

    /**
     * Create a new redirect response, while putting the current URL in the session.
     *
     * @param string $path
     * @param int $status
     * @param array $headers
     * @param bool $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function guest($path, $status, $headers, $secure)
    {
        
    }

    /**
     * Create a new redirect response to the previously intended location.
     *
     * @param string $default
     * @param int $status
     * @param array $headers
     * @param bool $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function intended($default, $status, $headers, $secure)
    {
        
    }

    /**
     * Create a new redirect response to the given path.
     *
     * @param string $path
     * @param int $status
     * @param array $headers
     * @param bool $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function to($path, $status, $headers, $secure)
    {
        
    }

    /**
     * Create a new redirect response to the given HTTPS path.
     *
     * @param string $path
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function secure($path, $status, $headers)
    {
        
    }

    /**
     * Create a new redirect response to a named route.
     *
     * @param string $route
     * @param array $parameters
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function route($route, $parameters, $status, $headers)
    {
        
    }

    /**
     * Create a new redirect response to a controller action.
     *
     * @param string $action
     * @param array $parameters
     * @param int $status
     * @param array $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function action($action, $parameters, $status, $headers)
    {
        
    }

    /**
     * Get the URL generator instance.
     *
     * @return \Illuminate\Routing\UrlGenerator
     */
    public static function getUrlGenerator()
    {
        
    }

    /**
     * Set the active session store.
     *
     * @param \Illuminate\Session\Store $session
     * @return void
     */
    public static function setSession($session)
    {
        
    }
}

class Redis extends Illuminate\Redis\Database
{

    /**
     * Get a specific Redis connection instance.
     *
     * @param string $name
     * @return \Predis\Connection\SingleConnectionInterface
     */
    public static function connection($name)
    {
        
    }

    /**
     * Run a command against the Redis database.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public static function command($method, $parameters)
    {
        
    }
}

class Request extends Illuminate\Http\Request
{

    /**
     * Return the Request instance.
     *
     * @return \Illuminate\Http\Request
     */
    public static function instance()
    {
        
    }

    /**
     * Get the root URL for the application.
     *
     * @return string
     */
    public static function root()
    {
        
    }

    /**
     * Get the URL (no query string) for the request.
     *
     * @return string
     */
    public static function url()
    {
        
    }

    /**
     * Get the full URL for the request.
     *
     * @return string
     */
    public static function fullUrl()
    {
        
    }

    /**
     * Get the current path info for the request.
     *
     * @return string
     */
    public static function path()
    {
        
    }

    /**
     * Get a segment from the URI (1 based index).
     *
     * @param string $index
     * @param mixed $default
     * @return string
     */
    public static function segment($index, $default)
    {
        
    }

    /**
     * Get all of the segments for the request path.
     *
     * @return array
     */
    public static function segments()
    {
        
    }

    /**
     * Determine if the current request URI matches a pattern.
     *
     * @param string $pattern
     * @return bool
     */
    public static function is($pattern)
    {
        
    }

    /**
     * Determine if the request is the result of an AJAX call.
     * 
     * @return bool
     */
    public static function ajax()
    {
        
    }

    /**
     * Determine if the request is over HTTPS.
     *
     * @return bool
     */
    public static function secure()
    {
        
    }

    /**
     * Determine if the request contains a given input item.
     *
     * @param string|array $key
     * @return bool
     */
    public static function has($key)
    {
        
    }

    /**
     * Get all of the input and files for the request.
     *
     * @return array
     */
    public static function all()
    {
        
    }

    /**
     * Retrieve an input item from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function input($key, $default)
    {
        
    }

    /**
     * Get a subset of the items from the input data.
     *
     * @param array $keys
     * @return array
     */
    public static function only($keys)
    {
        
    }

    /**
     * Get all of the input except for a specified array of items.
     *
     * @param array $keys
     * @return array
     */
    public static function except($keys)
    {
        
    }

    /**
     * Retrieve a query string item from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function query($key, $default)
    {
        
    }

    /**
     * Retrieve a cookie from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function cookie($key, $default)
    {
        
    }

    /**
     * Retrieve a file from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return \Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public static function file($key, $default)
    {
        
    }

    /**
     * Determine if the uploaded data contains a file.
     *
     * @param string $key
     * @return bool
     */
    public static function hasFile($key)
    {
        
    }

    /**
     * Retrieve a header from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function header($key, $default)
    {
        
    }

    /**
     * Retrieve a server variable from the request.
     *
     * @param string $key
     * @param mixed $default
     * @return string
     */
    public static function server($key, $default)
    {
        
    }

    /**
     * Retrieve an old input item.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function old($key, $default)
    {
        
    }

    /**
     * Flash the input for the current request to the session.
     *
     * @param string $filter
     * @param array $keys
     * @return void
     */
    public static function flash($filter, $keys)
    {
        
    }

    /**
     * Flash only some of the input to the session.
     *
     * @param dynamic string
     * @return void
     */
    public static function flashOnly()
    {
        
    }

    /**
     * Flash only some of the input to the session.
     *
     * @param dynamic string
     * @return void
     */
    public static function flashExcept()
    {
        
    }

    /**
     * Flush all of the old input from the session.
     *
     * @return void
     */
    public static function flush()
    {
        
    }

    /**
     * Merge new input into the current request's input array.
     *
     * @param array $input
     * @return void
     */
    public static function merge($input)
    {
        
    }

    /**
     * Replace the input for the current request.
     *
     * @param array $input
     * @return void
     */
    public static function replace($input)
    {
        
    }

    /**
     * Get the JSON payload for the request.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function json($key, $default)
    {
        
    }

    /**
     * Determine if the request is sending JSON.
     *
     * @return bool
     */
    public static function isJson()
    {
        
    }

    /**
     * Determine if the current request is asking for JSON in return.
     *
     * @return bool
     */
    public static function wantsJson()
    {
        
    }

    /**
     * Get the Illuminate session store implementation.
     *
     * @return \Illuminate\Session\Store
     */
    public static function getSessionStore()
    {
        
    }

    /**
     * Set the Illuminate session store implementation.
     *
     * @param \Illuminate\Session\Store $session
     * @return void
     */
    public static function setSessionStore($session)
    {
        
    }

    /**
     * Determine if the session store has been set.
     *
     * @return bool
     */
    public static function hasSessionStore()
    {
        
    }

    /**
     * Sets the parameters for this request.
     *
     * This method also re-initializes all properties.
     *
     * @param array $query The GET parameters
     * @param array $request The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies The COOKIE parameters
     * @param array $files The FILES parameters
     * @param array $server The SERVER parameters
     * @param string $content The raw body data
     *
     * @api
     */
    public static function initialize($query, $request, $attributes, $cookies, $files, $server, $content)
    {
        
    }

    /**
     * Creates a new request with values from PHP's super globals.
     *
     * @return Request A new request
     *
     * @api
     */
    public static function createFromGlobals()
    {
        
    }

    /**
     * Creates a Request based on a given URI and configuration.
     *
     * The information contained in the URI always take precedence
     * over the other information (server and parameters).
     *
     * @param string $uri The URI
     * @param string $method The HTTP method
     * @param array $parameters The query (GET) or request (POST) parameters
     * @param array $cookies The request cookies ($_COOKIE)
     * @param array $files The request files ($_FILES)
     * @param array $server The server parameters ($_SERVER)
     * @param string $content The raw body data
     *
     * @return Request A Request instance
     *
     * @api
     */
    public static function create($uri, $method, $parameters, $cookies, $files, $server, $content)
    {
        
    }

    /**
     * Clones a request and overrides some of its parameters.
     *
     * @param array $query The GET parameters
     * @param array $request The POST parameters
     * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
     * @param array $cookies The COOKIE parameters
     * @param array $files The FILES parameters
     * @param array $server The SERVER parameters
     *
     * @return Request The duplicated request
     *
     * @api
     */
    public static function duplicate($query, $request, $attributes, $cookies, $files, $server)
    {
        
    }

    /**
     * Overrides the PHP global variables according to this request instance.
     *
     * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
     * $_FILES is never override, see rfc1867
     *
     * @api
     */
    public static function overrideGlobals()
    {
        
    }

    /**
     * Sets a list of trusted proxies.
     *
     * You should only list the reverse proxies that you manage directly.
     *
     * @param array $proxies A list of trusted proxies
     *
     * @api
     */
    public static function setTrustedProxies($proxies)
    {
        
    }

    /**
     * Gets the list of trusted proxies.
     *
     * @return array An array of trusted proxies.
     */
    public static function getTrustedProxies()
    {
        
    }

    /**
     * Sets the name for trusted headers.
     *
     * The following header keys are supported:
     *
     * * Request::HEADER_CLIENT_IP: defaults to X-Forwarded-For (see getClientIp())
     * * Request::HEADER_CLIENT_HOST: defaults to X-Forwarded-Host (see getClientHost())
     * * Request::HEADER_CLIENT_PORT: defaults to X-Forwarded-Port (see getClientPort())
     * * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
     *
     * Setting an empty value allows to disable the trusted header for the given key.
     *
     * @param string $key The header key
     * @param string $value The header name
     *
     * @throws \InvalidArgumentException
     */
    public static function setTrustedHeaderName($key, $value)
    {
        
    }

    /**
     * Gets the trusted proxy header name.
     *
     * @param string $key The header key
     *
     * @return string The header name
     *
     * @throws \InvalidArgumentException
     */
    public static function getTrustedHeaderName($key)
    {
        
    }

    /**
     * Normalizes a query string.
     *
     * It builds a normalized query string, where keys/value pairs are alphabetized,
     * have consistent escaping and unneeded delimiters are removed.
     *
     * @param string $qs Query string
     *
     * @return string A normalized query string for the Request
     */
    public static function normalizeQueryString($qs)
    {
        
    }

    /**
     * Enables support for the _method request parameter to determine the intended HTTP method.
     *
     * Be warned that enabling this feature might lead to CSRF issues in your code.
     * Check that you are using CSRF tokens when required.
     *
     * The HTTP method can only be overridden when the real HTTP method is POST.
     */
    public static function enableHttpMethodParameterOverride()
    {
        
    }

    /**
     * Checks whether support for the _method request parameter is enabled.
     *
     * @return Boolean True when the _method request parameter is enabled, false otherwise
     */
    public static function getHttpMethodParameterOverride()
    {
        
    }

    /**
     * Gets a "parameter" value.
     *
     * This method is mainly useful for libraries that want to provide some flexibility.
     *
     * Order of precedence: GET, PATH, POST
     *
     * Avoid using this method in controllers:
     *
     * * slow
     * * prefer to get from a "named" source
     *
     * It is better to explicitly get request parameters from the appropriate
     * public property instead (query, attributes, request).
     *
     * @param string $key the key
     * @param mixed $default the default value
     * @param Boolean $deep is parameter deep in multidimensional array
     *
     * @return mixed
     */
    public static function get($key, $default, $deep)
    {
        
    }

    /**
     * Gets the Session.
     *
     * @return SessionInterface|null The session
     *
     * @api
     */
    public static function getSession()
    {
        
    }

    /**
     * Whether the request contains a Session which was started in one of the
     * previous requests.
     *
     * @return Boolean
     *
     * @api
     */
    public static function hasPreviousSession()
    {
        
    }

    /**
     * Whether the request contains a Session object.
     *
     * This method does not give any information about the state of the session object,
     * like whether the session is started or not. It is just a way to check if this Request
     * is associated with a Session instance.
     *
     * @return Boolean true when the Request contains a Session object, false otherwise
     *
     * @api
     */
    public static function hasSession()
    {
        
    }

    /**
     * Sets the Session.
     *
     * @param SessionInterface $session The Session
     *
     * @api
     */
    public static function setSession($session)
    {
        
    }

    /**
     * Returns the client IP addresses.
     *
     * The most trusted IP address is first, and the less trusted one last.
     * The "real" client IP address is the last one, but this is also the
     * less trusted one.
     *
     * Use this method carefully; you should use getClientIp() instead.
     *
     * @return array The client IP addresses
     *
     * @see getClientIp()
     */
    public static function getClientIps()
    {
        
    }

    /**
     * Returns the client IP address.
     *
     * This method can read the client IP address from the "X-Forwarded-For" header
     * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
     * header value is a comma+space separated list of IP addresses, the left-most
     * being the original client, and each successive proxy that passed the request
     * adding the IP address where it received the request from.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-For",
     * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
     * the "client-ip" key.
     *
     * @return string The client IP address
     *
     * @see getClientIps()
     * @see http://en.wikipedia.org/wiki/X-Forwarded-For
     *
     * @api
     */
    public static function getClientIp()
    {
        
    }

    /**
     * Returns current script name.
     *
     * @return string
     *
     * @api
     */
    public static function getScriptName()
    {
        
    }

    /**
     * Returns the path being requested relative to the executed script.
     *
     * The path info always starts with a /.
     *
     * Suppose this request is instantiated from /mysite on localhost:
     *
     * * http://localhost/mysite returns an empty string
     * * http://localhost/mysite/about returns '/about'
     * * http://localhost/mysite/enco%20ded returns '/enco%20ded'
     * * http://localhost/mysite/about?var=1 returns '/about'
     *
     * @return string The raw path (i.e. not urldecoded)
     *
     * @api
     */
    public static function getPathInfo()
    {
        
    }

    /**
     * Returns the root path from which this request is executed.
     *
     * Suppose that an index.php file instantiates this request object:
     *
     * * http://localhost/index.php returns an empty string
     * * http://localhost/index.php/page returns an empty string
     * * http://localhost/web/index.php returns '/web'
     * * http://localhost/we%20b/index.php returns '/we%20b'
     *
     * @return string The raw path (i.e. not urldecoded)
     *
     * @api
     */
    public static function getBasePath()
    {
        
    }

    /**
     * Returns the root url from which this request is executed.
     *
     * The base URL never ends with a /.
     *
     * This is similar to getBasePath(), except that it also includes the
     * script filename (e.g. index.php) if one exists.
     *
     * @return string The raw url (i.e. not urldecoded)
     *
     * @api
     */
    public static function getBaseUrl()
    {
        
    }

    /**
     * Gets the request's scheme.
     *
     * @return string
     *
     * @api
     */
    public static function getScheme()
    {
        
    }

    /**
     * Returns the port on which the request is made.
     *
     * This method can read the client port from the "X-Forwarded-Port" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Port" header must contain the client port.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-Port",
     * configure it via "setTrustedHeaderName()" with the "client-port" key.
     *
     * @return string
     *
     * @api
     */
    public static function getPort()
    {
        
    }

    /**
     * Returns the user.
     *
     * @return string|null
     */
    public static function getUser()
    {
        
    }

    /**
     * Returns the password.
     *
     * @return string|null
     */
    public static function getPassword()
    {
        
    }

    /**
     * Gets the user info.
     *
     * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
     */
    public static function getUserInfo()
    {
        
    }

    /**
     * Returns the HTTP host being requested.
     *
     * The port name will be appended to the host if it's non-standard.
     *
     * @return string
     *
     * @api
     */
    public static function getHttpHost()
    {
        
    }

    /**
     * Returns the requested URI.
     *
     * @return string The raw URI (i.e. not urldecoded)
     *
     * @api
     */
    public static function getRequestUri()
    {
        
    }

    /**
     * Gets the scheme and HTTP host.
     *
     * If the URL was called with basic authentication, the user
     * and the password are not added to the generated string.
     *
     * @return string The scheme and HTTP host
     */
    public static function getSchemeAndHttpHost()
    {
        
    }

    /**
     * Generates a normalized URI for the Request.
     *
     * @return string A normalized URI for the Request
     *
     * @see getQueryString()
     *
     * @api
     */
    public static function getUri()
    {
        
    }

    /**
     * Generates a normalized URI for the given path.
     *
     * @param string $path A path to use instead of the current one
     *
     * @return string The normalized URI for the path
     *
     * @api
     */
    public static function getUriForPath($path)
    {
        
    }

    /**
     * Generates the normalized query string for the Request.
     *
     * It builds a normalized query string, where keys/value pairs are alphabetized
     * and have consistent escaping.
     *
     * @return string|null A normalized query string for the Request
     *
     * @api
     */
    public static function getQueryString()
    {
        
    }

    /**
     * Checks whether the request is secure or not.
     *
     * This method can read the client port from the "X-Forwarded-Proto" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
     * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
     * the "client-proto" key.
     *
     * @return Boolean
     *
     * @api
     */
    public static function isSecure()
    {
        
    }

    /**
     * Returns the host name.
     *
     * This method can read the client port from the "X-Forwarded-Host" header
     * when trusted proxies were set via "setTrustedProxies()".
     *
     * The "X-Forwarded-Host" header must contain the client host name.
     *
     * If your reverse proxy uses a different header name than "X-Forwarded-Host",
     * configure it via "setTrustedHeaderName()" with the "client-host" key.
     *
     * @return string
     *
     * @throws \UnexpectedValueException when the host name is invalid
     *
     * @api
     */
    public static function getHost()
    {
        
    }

    /**
     * Sets the request method.
     *
     * @param string $method
     *
     * @api
     */
    public static function setMethod($method)
    {
        
    }

    /**
     * Gets the request "intended" method.
     *
     * If the X-HTTP-Method-Override header is set, and if the method is a POST,
     * then it is used to determine the "real" intended HTTP method.
     *
     * The _method request parameter can also be used to determine the HTTP method,
     * but only if enableHttpMethodParameterOverride() has been called.
     *
     * The method is always an uppercased string.
     *
     * @return string The request method
     *
     * @api
     *
     * @see getRealMethod
     */
    public static function getMethod()
    {
        
    }

    /**
     * Gets the "real" request method.
     *
     * @return string The request method
     *
     * @see getMethod
     */
    public static function getRealMethod()
    {
        
    }

    /**
     * Gets the mime type associated with the format.
     *
     * @param string $format The format
     *
     * @return string The associated mime type (null if not found)
     *
     * @api
     */
    public static function getMimeType($format)
    {
        
    }

    /**
     * Gets the format associated with the mime type.
     *
     * @param string $mimeType The associated mime type
     *
     * @return string|null The format (null if not found)
     *
     * @api
     */
    public static function getFormat($mimeType)
    {
        
    }

    /**
     * Associates a format with mime types.
     *
     * @param string $format The format
     * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
     *
     * @api
     */
    public static function setFormat($format, $mimeTypes)
    {
        
    }

    /**
     * Gets the request format.
     *
     * Here is the process to determine the format:
     *
     * * format defined by the user (with setRequestFormat())
     * * _format request parameter
     * * $default
     *
     * @param string $default The default format
     *
     * @return string The request format
     *
     * @api
     */
    public static function getRequestFormat($default)
    {
        
    }

    /**
     * Sets the request format.
     *
     * @param string $format The request format.
     *
     * @api
     */
    public static function setRequestFormat($format)
    {
        
    }

    /**
     * Gets the format associated with the request.
     *
     * @return string|null The format (null if no content type is present)
     *
     * @api
     */
    public static function getContentType()
    {
        
    }

    /**
     * Sets the default locale.
     *
     * @param string $locale
     *
     * @api
     */
    public static function setDefaultLocale($locale)
    {
        
    }

    /**
     * Sets the locale.
     *
     * @param string $locale
     *
     * @api
     */
    public static function setLocale($locale)
    {
        
    }

    /**
     * Get the locale.
     *
     * @return string
     */
    public static function getLocale()
    {
        
    }

    /**
     * Checks if the request method is of specified type.
     *
     * @param string $method Uppercase request method (GET, POST etc).
     *
     * @return Boolean
     */
    public static function isMethod($method)
    {
        
    }

    /**
     * Checks whether the method is safe or not.
     *
     * @return Boolean
     *
     * @api
     */
    public static function isMethodSafe()
    {
        
    }

    /**
     * Returns the request body content.
     *
     * @param Boolean $asResource If true, a resource will be returned
     *
     * @return string|resource The request body content or a resource to read the body stream.
     *
     * @throws \LogicException
     */
    public static function getContent($asResource)
    {
        
    }

    /**
     * Gets the Etags.
     *
     * @return array The entity tags
     */
    public static function getETags()
    {
        
    }

    /**
     * @return Boolean
     */
    public static function isNoCache()
    {
        
    }

    /**
     * Returns the preferred language.
     *
     * @param array $locales An array of ordered available locales
     *
     * @return string|null The preferred locale
     *
     * @api
     */
    public static function getPreferredLanguage($locales)
    {
        
    }

    /**
     * Gets a list of languages acceptable by the client browser.
     *
     * @return array Languages ordered in the user browser preferences
     *
     * @api
     */
    public static function getLanguages()
    {
        
    }

    /**
     * Gets a list of charsets acceptable by the client browser.
     *
     * @return array List of charsets in preferable order
     *
     * @api
     */
    public static function getCharsets()
    {
        
    }

    /**
     * Gets a list of content types acceptable by the client browser
     *
     * @return array List of content types in preferable order
     *
     * @api
     */
    public static function getAcceptableContentTypes()
    {
        
    }

    /**
     * Returns true if the request is a XMLHttpRequest.
     *
     * It works if your JavaScript library set an X-Requested-With HTTP header.
     * It is known to work with common JavaScript frameworks:
     * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
     *
     * @return Boolean true if the request is an XMLHttpRequest, false otherwise
     *
     * @api
     */
    public static function isXmlHttpRequest()
    {
        
    }
}

class Response extends Illuminate\Support\Facades\Response
{
    
}

class Route extends Illuminate\Routing\Router
{

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function get($pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function post($pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function put($pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function patch($pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function delete($pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function options($pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $method
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function match($method, $pattern, $action)
    {
        
    }

    /**
     * Add a new route to the collection.
     *
     * @param string $pattern
     * @param mixed $action
     * @return \Illuminate\Routing\Route
     */
    public static function any($pattern, $action)
    {
        
    }

    /**
     * Register an array of controllers with wildcard routing.
     *
     * @param array $controllers
     * @return void
     */
    public static function controllers($controllers)
    {
        
    }

    /**
     * Route a controller to a URI with wildcard routing.
     *
     * @param string $uri
     * @param string $controller
     * @param array $names
     * @return \Illuminate\Routing\Route
     */
    public static function controller($uri, $controller, $names)
    {
        
    }

    /**
     * Route a resource to a controller.
     *
     * @param string $resource
     * @param string $controller
     * @param array $options
     * @return void
     */
    public static function resource($resource, $controller, $options)
    {
        
    }

    /**
     * Get the base resource URI for a given resource.
     *
     * @param string $resource
     * @return string
     */
    public static function getResourceUri($resource)
    {
        
    }

    /**
     * Format a resource wildcard parameter.
     *
     * @param string $value
     * @return string
     */
    public static function getResourceWildcard($value)
    {
        
    }

    /**
     * Create a route group with shared attributes.
     *
     * @param array $attributes
     * @param Closure $callback
     * @return void
     */
    public static function group($attributes, $callback)
    {
        
    }

    /**
     * Get the response for a given request.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function dispatch($request)
    {
        
    }

    /**
     * Register a "before" routing filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function before($callback)
    {
        
    }

    /**
     * Register an "after" routing filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function after($callback)
    {
        
    }

    /**
     * Register a "close" routing filter.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function close($callback)
    {
        
    }

    /**
     * Register a "finish" routing filters.
     *
     * @param Closure|string $callback
     * @return void
     */
    public static function finish($callback)
    {
        
    }

    /**
     * Register a new filter with the application.
     *
     * @param string $name
     * @param Closure|string $callback
     * @return void
     */
    public static function filter($name, $callback)
    {
        
    }

    /**
     * Get a registered filter callback.
     *
     * @param string $name
     * @return Closure
     */
    public static function getFilter($name)
    {
        
    }

    /**
     * Tie a registered filter to a URI pattern.
     *
     * @param string $pattern
     * @param string|array $names
     * @param array|null $methods
     * @return void
     */
    public static function when($pattern, $names, $methods)
    {
        
    }

    /**
     * Find the patterned filters matching a request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public static function findPatternFilters($request)
    {
        
    }

    /**
     * Call the finish" global filter.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     * @return mixed
     */
    public static function callFinishFilter($request, $response)
    {
        
    }

    /**
     * Call the "close" global filter.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Symfony\Component\HttpFoundation\Response $response
     * @return mixed
     */
    public static function callCloseFilter($request, $response)
    {
        
    }

    /**
     * Set a global where pattern on all routes
     *
     * @param string $key
     * @param string $pattern
     * @return void
     */
    public static function pattern($key, $pattern)
    {
        
    }

    /**
     * Register a model binder for a wildcard.
     *
     * @param string $key
     * @param string $class
     * @return void
     */
    public static function model($key, $class)
    {
        
    }

    /**
     * Register a custom parameter binder.
     *
     * @param string $key
     * @param mixed $binder
     */
    public static function bind($key, $binder)
    {
        
    }

    /**
     * Determine if a given key has a registered binder.
     *
     * @param string $key
     * @return bool
     */
    public static function hasBinder($key)
    {
        
    }

    /**
     * Call a binder for a given wildcard.
     *
     * @param string $key
     * @param mixed $value
     * @param \Illuminate\Routing\Route $route
     * @return mixed
     */
    public static function performBinding($key, $value, $route)
    {
        
    }

    /**
     * Prepare the given value as a Response object.
     *
     * @param mixed $value
     * @param \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public static function prepare($value, $request)
    {
        
    }

    /**
     * Get the current route name.
     *
     * @return string|null
     */
    public static function currentRouteName()
    {
        
    }

    /**
     * Determine if the current route has a given name.
     *
     * @param string $name
     * @return bool
     */
    public static function currentRouteNamed($name)
    {
        
    }

    /**
     * Get the current route action.
     *
     * @return string|null
     */
    public static function currentRouteAction()
    {
        
    }

    /**
     * Determine if the current route uses a given controller action.
     *
     * @param string $action
     * @return bool
     */
    public static function currentRouteUses($action)
    {
        
    }

    /**
     * Determine if route filters are enabled.
     *
     * @return bool
     */
    public static function filtersEnabled()
    {
        
    }

    /**
     * Enable the running of filters.
     *
     * @return void
     */
    public static function enableFilters()
    {
        
    }

    /**
     * Disable the running of all filters.
     *
     * @return void
     */
    public static function disableFilters()
    {
        
    }

    /**
     * Retrieve the entire route collection.
     * 
     * @return \Symfony\Component\Routing\RouteCollection
     */
    public static function getRoutes()
    {
        
    }

    /**
     * Get the current request being dispatched.
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public static function getRequest()
    {
        
    }

    /**
     * Get the current route being executed.
     *
     * @return \Illuminate\Routing\Route
     */
    public static function getCurrentRoute()
    {
        
    }

    /**
     * Set the current route on the router.
     *
     * @param \Illuminate\Routing\Route $route
     * @return void
     */
    public static function setCurrentRoute($route)
    {
        
    }

    /**
     * Get the filters defined on the router.
     *
     * @return array
     */
    public static function getFilters()
    {
        
    }

    /**
     * Get the global filters defined on the router.
     *
     * @return array
     */
    public static function getGlobalFilters()
    {
        
    }

    /**
     * Get the controller inspector instance.
     *
     * @return \Illuminate\Routing\Controllers\Inspector
     */
    public static function getInspector()
    {
        
    }

    /**
     * Set the controller inspector instance.
     *
     * @param \Illuminate\Routing\Controllers\Inspector $inspector
     * @return void
     */
    public static function setInspector($inspector)
    {
        
    }

    /**
     * Get the container used by the router.
     *
     * @return \Illuminate\Container\Container
     */
    public static function getContainer()
    {
        
    }

    /**
     * Set the container instance on the router.
     *
     * @param \Illuminate\Container\Container $container
     * @return void
     */
    public static function setContainer($container)
    {
        
    }
}

class Schema extends Illuminate\Database\Schema\Builder
{

    /**
     * Determine if the given table exists.
     *
     * @param string $table
     * @return bool
     */
    public static function hasTable($table)
    {
        
    }

    /**
     * Determine if the given table has a given column.
     *
     * @param string $table
     * @param string $column
     * @return bool
     */
    public static function hasColumn($table, $column)
    {
        
    }

    /**
     * Modify a table on the schema.
     *
     * @param string $table
     * @param Closure $callback
     * @return \Illuminate\Database\Schema\Blueprint
     */
    public static function table($table, $callback)
    {
        
    }

    /**
     * Create a new table on the schema.
     *
     * @param string $table
     * @param Closure $callback
     * @return \Illuminate\Database\Schema\Blueprint
     */
    public static function create($table, $callback)
    {
        
    }

    /**
     * Drop a table from the schema.
     *
     * @param string $table
     * @return \Illuminate\Database\Schema\Blueprint
     */
    public static function drop($table)
    {
        
    }

    /**
     * Drop a table from the schema if it exists.
     *
     * @param string $table
     * @return \Illuminate\Database\Schema\Blueprint
     */
    public static function dropIfExists($table)
    {
        
    }

    /**
     * Rename a table on the schema.
     *
     * @param string $from
     * @param string $to
     * @return \Illuminate\Database\Schema\Blueprint
     */
    public static function rename($from, $to)
    {
        
    }

    /**
     * Get the database connection instance.
     *
     * @return \Illuminate\Database\Connection
     */
    public static function getConnection()
    {
        
    }

    /**
     * Set the database connection instance.
     *
     * @param \Illuminate\Database\Connection
     * @return \Illuminate\Database\Schema\Builder
     */
    public static function setConnection()
    {
        
    }
}

class Seeder extends Illuminate\Database\Seeder
{
    
}

class Session extends Illuminate\Session\Store
{

    /**
     * {@inheritdoc}
     */
    public static function start()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function save()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function has()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function get()
    {
        
    }

    /**
     * Determine if the session contains old input.
     *
     * @param string $key
     * @return bool
     */
    public static function hasOldInput($key)
    {
        
    }

    /**
     * Get the requested item from the flashed input array.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getOldInput($key, $default)
    {
        
    }

    /**
     * Get the CSRF token value.
     *
     * @return string
     */
    public static function getToken()
    {
        
    }

    /**
     * Get the CSRF token value.
     *
     * @return string
     */
    public static function token()
    {
        
    }

    /**
     * Put a key / value pair in the session.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function put($key, $value)
    {
        
    }

    /**
     * Push a value onto a session array.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function push($key, $value)
    {
        
    }

    /**
     * Flash a key / value pair to the session.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function flash($key, $value)
    {
        
    }

    /**
     * Flash an input array to the session.
     *
     * @param array $value
     * @return void
     */
    public static function flashInput($value)
    {
        
    }

    /**
     * Reflash all of the session flash data.
     *
     * @return void
     */
    public static function reflash()
    {
        
    }

    /**
     * Reflash a subset of the current flash data.
     *
     * @param array|dynamic $keys
     * @return void
     */
    public static function keep($keys)
    {
        
    }

    /**
     * Remove an item from the session.
     *
     * @param string $key
     * @return void
     */
    public static function forget($key)
    {
        
    }

    /**
     * Remove all of the items from the session.
     *
     * @return void
     */
    public static function flush()
    {
        
    }

    /**
     * Generate a new session identifier.
     *
     * @return string
     */
    public static function regenerate()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function set()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function all()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function replace()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function remove()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function clear()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function isStarted()
    {
        
    }

    /**
     * Returns an iterator for attributes.
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public static function getIterator()
    {
        
    }

    /**
     * Returns the number of attributes.
     *
     * @return int The number of attributes
     */
    public static function count()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function invalidate()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function migrate()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function getId()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function setId()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function getName()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function setName()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function getMetadataBag()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function registerBag()
    {
        
    }

    /**
     * {@inheritdoc}
     */
    public static function getBag()
    {
        
    }

    /**
     * Gets the flashbag interface.
     *
     * @return FlashBagInterface
     */
    public static function getFlashBag()
    {
        
    }
}

class Str extends Illuminate\Support\Str
{
    
}

class URL extends Illuminate\Routing\UrlGenerator
{

    /**
     * Get the full URL for the current request.
     *
     * @return string
     */
    public static function full()
    {
        
    }

    /**
     * Get the current URL for the request.
     *
     * @return string
     */
    public static function current()
    {
        
    }

    /**
     * Get the URL for the previous request.
     *
     * @return string
     */
    public static function previous()
    {
        
    }

    /**
     * Generate a absolute URL to the given path.
     *
     * @param string $path
     * @param mixed $parameters
     * @param bool $secure
     * @return string
     */
    public static function to($path, $parameters, $secure)
    {
        
    }

    /**
     * Generate a secure, absolute URL to the given path.
     *
     * @param string $path
     * @param array $parameters
     * @return string
     */
    public static function secure($path, $parameters)
    {
        
    }

    /**
     * Generate a URL to an application asset.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    public static function asset($path, $secure)
    {
        
    }

    /**
     * Generate a URL to a secure asset.
     *
     * @param string $path
     * @return string
     */
    public static function secureAsset($path)
    {
        
    }

    /**
     * Get the URL to a named route.
     *
     * @param string $name
     * @param mixed $parameters
     * @param bool $absolute
     * @return string
     */
    public static function route($name, $parameters, $absolute)
    {
        
    }

    /**
     * Get the URL to a controller action.
     *
     * @param string $action
     * @param mixed $parameters
     * @param bool $absolute
     * @return string
     */
    public static function action($action, $parameters, $absolute)
    {
        
    }

    /**
     * Determine if the given path is a valid URL.
     *
     * @param string $path
     * @return bool
     */
    public static function isValidUrl($path)
    {
        
    }

    /**
     * Get the request instance.
     *
     * @return \Symfony\Component\HttpFoundation\Request
     */
    public static function getRequest()
    {
        
    }

    /**
     * Set the current request instance.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return void
     */
    public static function setRequest($request)
    {
        
    }

    /**
     * Get the Symfony URL generator instance.
     *
     * @return \Symfony\Component\Routing\Generator\UrlGenerator
     */
    public static function getGenerator()
    {
        
    }

    /**
     * Set the Symfony URL generator instance.
     *
     * @param \Symfony\Component\Routing\Generator\UrlGenerator $generator
     * @return void
     */
    public static function setGenerator($generator)
    {
        
    }
}

class Validator extends Illuminate\Validation\Factory
{

    /**
     * Create a new Validator instance.
     *
     * @param array $data
     * @param array $rules
     * @param array $messages
     * @return \Illuminate\Validation\Validator
     */
    public static function make($data, $rules, $messages)
    {
        
    }

    /**
     * Register a custom validator extension.
     *
     * @param string $rule
     * @param Closure|string $extension
     * @return void
     */
    public static function extend($rule, $extension)
    {
        
    }

    /**
     * Register a custom implicit validator extension.
     *
     * @param string $rule
     * @param Closure $extension
     * @return void
     */
    public static function extendImplicit($rule, $extension)
    {
        
    }

    /**
     * Set the Validator instance resolver.
     *
     * @param Closure $resolver
     * @return void
     */
    public static function resolver($resolver)
    {
        
    }

    /**
     * Get the Translator implementation.
     *
     * @return \Symfony\Component\Translation\TranslatorInterface
     */
    public static function getTranslator()
    {
        
    }

    /**
     * Get the Presence Verifier implementation.
     *
     * @return \Illuminate\Validation\PresenceVerifierInterface
     */
    public static function getPresenceVerifier()
    {
        
    }

    /**
     * Set the Presence Verifier implementation.
     *
     * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
     * @return void
     */
    public static function setPresenceVerifier($presenceVerifier)
    {
        
    }
}

class View extends Illuminate\View\Environment
{

    /**
     * Get a evaluated view contents for the given view.
     *
     * @param string $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\View\View
     */
    public static function make($view, $data, $mergeData)
    {
        
    }

    /**
     * Get a evaluated view contents for a named view.
     *
     * @param string $view
     * @param mixed $data
     * @return \Illuminate\View\View
     */
    public static function of($view, $data)
    {
        
    }

    /**
     * Register a named view.
     *
     * @param string $view
     * @param string $name
     * @return void
     */
    public static function name($view, $name)
    {
        
    }

    /**
     * Determine if a given view exists.
     *
     * @param string $view
     * @return bool
     */
    public static function exists($view)
    {
        
    }

    /**
     * Get the rendered contents of a partial from a loop.
     *
     * @param string $view
     * @param array $data
     * @param string $iterator
     * @param string $empty
     * @return string
     */
    public static function renderEach($view, $data, $iterator, $empty)
    {
        
    }

    /**
     * Add a piece of shared data to the environment.
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function share($key, $value)
    {
        
    }

    /**
     * Register a view composer event.
     *
     * @param array|string $views
     * @param Closure|string $callback
     * @return Closure
     */
    public static function composer($views, $callback)
    {
        
    }

    /**
     * Call the composer for a given view.
     *
     * @param \Illuminate\View\View $view
     * @return void
     */
    public static function callComposer($view)
    {
        
    }

    /**
     * Start injecting content into a section.
     *
     * @param string $section
     * @param string $content
     * @return void
     */
    public static function startSection($section, $content)
    {
        
    }

    /**
     * Inject inline content into a section.
     *
     * @param string $section
     * @param string $content
     * @return void
     */
    public static function inject($section, $content)
    {
        
    }

    /**
     * Stop injecting content into a section and return its contents.
     *
     * @return string
     */
    public static function yieldSection()
    {
        
    }

    /**
     * Stop injecting content into a section.
     *
     * @param bool $overwrite
     * @return string
     */
    public static function stopSection($overwrite)
    {
        
    }

    /**
     * Get the string contents of a section.
     *
     * @param string $section
     * @return string
     */
    public static function yieldContent($section)
    {
        
    }

    /**
     * Flush all of the section contents.
     *
     * @return void
     */
    public static function flushSections()
    {
        
    }

    /**
     * Increment the rendering counter.
     *
     * @return void
     */
    public static function incrementRender()
    {
        
    }

    /**
     * Decrement the rendering counter.
     *
     * @return void
     */
    public static function decrementRender()
    {
        
    }

    /**
     * Check if there are no active render operations.
     *
     * @return bool
     */
    public static function doneRendering()
    {
        
    }

    /**
     * Add a location to the array of view locations.
     *
     * @param string $location
     * @return void
     */
    public static function addLocation($location)
    {
        
    }

    /**
     * Add a new namespace to the loader.
     *
     * @param string $namespace
     * @param string|array $hints
     * @return void
     */
    public static function addNamespace($namespace, $hints)
    {
        
    }

    /**
     * Register a valid view extension and its engine.
     *
     * @param string $extension
     * @param string $engine
     * @param Closure $resolver
     * @return void
     */
    public static function addExtension($extension, $engine, $resolver)
    {
        
    }

    /**
     * Get the extension to engine bindings.
     *
     * @return array
     */
    public static function getExtensions()
    {
        
    }

    /**
     * Get the engine resolver instance.
     *
     * @return \Illuminate\View\Engines\EngineResolver
     */
    public static function getEngineResolver()
    {
        
    }

    /**
     * Get the view finder instance.
     *
     * @return \Illuminate\View\ViewFinderInterface
     */
    public static function getFinder()
    {
        
    }

    /**
     * Get the event dispatcher instance.
     *
     * @return \Illuminate\Events\Dispatcher
     */
    public static function getDispatcher()
    {
        
    }

    /**
     * Get the IoC container instance.
     *
     * @return \Illuminate\Container\Container
     */
    public static function getContainer()
    {
        
    }

    /**
     * Set the IoC container instance.
     *
     * @param \Illuminate\Container\Container $container
     * @return void
     */
    public static function setContainer($container)
    {
        
    }

    /**
     * Get all of the shared data for the environment.
     *
     * @return array
     */
    public static function getShared()
    {
        
    }

    /**
     * Get the entire array of sections.
     *
     * @return array
     */
    public static function getSections()
    {
        
    }

    /**
     * Get all of the registered named views in environment.
     *
     * @return array
     */
    public static function getNames()
    {
        
    }
}