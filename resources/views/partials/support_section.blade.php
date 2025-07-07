<section class="support-section">
  <div class="alignment">
    <ul>
      <li class="support-get-in-touch">Get in touch</li>
    </ul>
    <h2 class="support-title">Our Support Center</h2>
    <p class="support-subtitle">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec mattis.
    </p>
  </div>

  <div class="support-box-container">
    <div class="support-box">
      <div class="icon">
        <i class="fa-regular fa-comment"></i>
      </div>
      <div>
        <h2>Live Chat</h2>
        <p>Talk to customer support</p>
      </div>
    </div>
    <div class="support-box">
      <div class="icon">
        <i class="fa-regular fa-circle-question"></i>
      </div>
      <div>
        <h2>Read FAQs</h2>
        <p>Find answers to common questions</p>
      </div>
    </div>
  </div>

  <div class="form-container">
    <form class="support-form">
      <label for="name">Your Name *</label>
      <input type="text" id="name" name="name" placeholder="John Doe" required autocomplete="name" />

      <div class="support-form-row">
        <div>
          <label for="phone">Phone *</label>
          <input type="tel" id="phone" name="phone" placeholder="+1 (234) 567 890" required autocomplete="tel" />
        </div>
        <div>
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" placeholder="example@mail.com" required autocomplete="email" />
        </div>
      </div>

      <label for="topic">What Can We Help?</label>
      <select id="topic" name="topic" required>
        <option value="">Select...</option>
        <option value="technical">Technical Issue</option>
        <option value="billing">Billing</option>
        <option value="other">Other</option>
      </select>

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Hello there!" required autocomplete="off"></textarea>

      <button type="submit">Submit Form</button>
    </form>
  </div>
</section>
