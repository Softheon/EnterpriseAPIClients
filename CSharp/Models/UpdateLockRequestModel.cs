// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// Update request model for Locks
    /// </summary>
    public partial class UpdateLockRequestModel
    {
        /// <summary>
        /// Initializes a new instance of the UpdateLockRequestModel class.
        /// </summary>
        public UpdateLockRequestModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the UpdateLockRequestModel class.
        /// </summary>
        /// <param name="expirationDuration">Gets or sets the expiration
        /// duration of the lock in minutes.</param>
        /// <param name="acl">Gets or sets the access control level permissions
        /// of the lock.</param>
        /// <param name="applicationName">Gets or sets the name of the
        /// application creating the lock.</param>
        public UpdateLockRequestModel(int? expirationDuration = default(int?), int? acl = default(int?), string applicationName = default(string))
        {
            ExpirationDuration = expirationDuration;
            Acl = acl;
            ApplicationName = applicationName;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the expiration duration of the lock in minutes.
        /// </summary>
        [JsonProperty(PropertyName = "ExpirationDuration")]
        public int? ExpirationDuration { get; set; }

        /// <summary>
        /// Gets or sets the access control level permissions of the lock.
        /// </summary>
        [JsonProperty(PropertyName = "Acl")]
        public int? Acl { get; set; }

        /// <summary>
        /// Gets or sets the name of the application creating the lock.
        /// </summary>
        [JsonProperty(PropertyName = "ApplicationName")]
        public string ApplicationName { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (ExpirationDuration > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "ExpirationDuration", 2147483647);
            }
            if (ExpirationDuration < 0)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "ExpirationDuration", 0);
            }
            if (ApplicationName != null)
            {
                if (ApplicationName.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "ApplicationName", 255);
                }
                if (ApplicationName.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "ApplicationName", 0);
                }
            }
        }
    }
}