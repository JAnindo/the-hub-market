<x-guest-layout>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@400;500&display=swap');
  .hub-wrap { font-family: 'DM Sans', sans-serif; }
  .hub-card { max-width: 520px; margin: 0 auto; background: #fff; border-radius: 20px; border: 1.5px solid #ffd4a8; overflow: hidden; }
  .hub-header { background: #ff6b00; padding: 2rem 2rem 1.5rem; text-align: center; }
  .hub-logo { display: flex; align-items: center; justify-content: center; gap: 10px; margin-bottom: 0.5rem; }
  .hub-logo-icon { width: 42px; height: 42px; background: #fff; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 24px; }
  .hub-title { font-family: 'Playfair Display', serif; font-size: 22px; color: #fff; margin: 0; }
  .hub-subtitle { font-size: 13px; color: #ffd4a8; margin: 4px 0 0; }
  .hub-body { padding: 1.75rem 2rem 2rem; }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
  .hub-field { margin-bottom: 14px; }
  .hub-field label { display: block; font-size: 12px; font-weight: 500; color: #7a4f2e; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 5px; }
  .hub-field input, .hub-field textarea { width: 100%; box-sizing: border-box; padding: 10px 14px; border: 1.5px solid #ffd4a8; border-radius: 10px; font-size: 14px; font-family: 'DM Sans', sans-serif; color: #2d1a0e; background: #fff8f3; outline: none; transition: border-color 0.2s; }
  .hub-field input:focus, .hub-field textarea:focus { border-color: #ff6b00; background: #fff; }
  .hub-field textarea { resize: vertical; min-height: 72px; }
  .hub-divider { border: none; border-top: 1px solid #ffe8d0; margin: 4px 0 16px; }
  .hub-btn { width: 100%; padding: 13px; background: #ff6b00; color: #fff; font-family: 'DM Sans', sans-serif; font-size: 15px; font-weight: 500; border: none; border-radius: 10px; cursor: pointer; transition: background 0.2s; }
  .hub-btn:hover { background: #e55e00; }
  .hub-footer { text-align: center; margin-top: 14px; font-size: 13px; color: #a07050; }
  .hub-footer a { color: #ff6b00; text-decoration: none; font-weight: 500; }
  .section-label { font-size: 11px; font-weight: 500; color: #ff6b00; text-transform: uppercase; letter-spacing: 0.08em; margin-bottom: 10px; }
</style>

<div class="hub-wrap">
  <div class="hub-card">
    <div class="hub-header">
      <div class="hub-logo">
        <div class="hub-logo-icon">🛍️</div>
        <h1 class="hub-title">The Hub Market</h1>
      </div>
      <p class="hub-subtitle">Create your account to start shopping</p>
    </div>

    <div class="hub-body">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <p class="section-label">Account details</p>

        <div class="hub-field">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus placeholder="e.g. john_doe" />
          <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <div class="form-row">
          <div class="hub-field">
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required placeholder="John" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
          </div>
          <div class="hub-field">
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required placeholder="Doe" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
          </div>
        </div>

        <div class="hub-field">
          <label for="phone">Phone number</label>
          <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="+254 700 000 000" />
          <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div class="hub-field">
          <label for="address">Delivery address</label>
          <textarea id="address" name="address" required placeholder="Street, City, Postcode...">{{ old('address') }}</textarea>
          <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <hr class="hub-divider" />
        <p class="section-label">Login credentials</p>

        <div class="hub-field">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="john@example.com" />
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-row">
          <div class="hub-field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
          <div class="hub-field">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
        </div>

        <button type="submit" class="hub-btn">🛍️ &nbsp;Create Account</button>

        <div class="hub-footer">
          Already have an account? <a href="{{ route('login') }}">Sign in</a>
        </div>
      </form>
    </div>
  </div>
</div>
</x-guest-layout>