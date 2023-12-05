@stack('footer_scripts')
        
        <script>
            const userId = {{ isset($user) && $user ? $user->id : 0 }};
        </script>

        <script async src="{{ config('app.url') }}{{ mix('js/backend.js', 'assets/build') }}"></script>

    </body>
</html>