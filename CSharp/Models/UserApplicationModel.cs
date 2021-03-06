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
    /// The model that is sent in response to a GET request for UserApplication
    /// associations
    /// </summary>
    public partial class UserApplicationModel
    {
        /// <summary>
        /// Initializes a new instance of the UserApplicationModel class.
        /// </summary>
        public UserApplicationModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the UserApplicationModel class.
        /// </summary>
        /// <param name="userID">Gets or sets the user identifier.</param>
        /// <param name="userFullName">Gets or sets the full name of the
        /// user.</param>
        /// <param name="applicationID">Gets or sets the application
        /// identifier.</param>
        /// <param name="applicationName">Gets or sets the name of the
        /// application.</param>
        /// <param name="acl">Gets or sets the access control level
        /// permissions.</param>
        public UserApplicationModel(int? userID = default(int?), string userFullName = default(string), int? applicationID = default(int?), string applicationName = default(string), int? acl = default(int?))
        {
            UserID = userID;
            UserFullName = userFullName;
            ApplicationID = applicationID;
            ApplicationName = applicationName;
            Acl = acl;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "UserID")]
        public int? UserID { get; set; }

        /// <summary>
        /// Gets or sets the full name of the user.
        /// </summary>
        [JsonProperty(PropertyName = "UserFullName")]
        public string UserFullName { get; set; }

        /// <summary>
        /// Gets or sets the application identifier.
        /// </summary>
        [JsonProperty(PropertyName = "ApplicationID")]
        public int? ApplicationID { get; set; }

        /// <summary>
        /// Gets or sets the name of the application.
        /// </summary>
        [JsonProperty(PropertyName = "ApplicationName")]
        public string ApplicationName { get; set; }

        /// <summary>
        /// Gets or sets the access control level permissions.
        /// </summary>
        [JsonProperty(PropertyName = "Acl")]
        public int? Acl { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (UserFullName != null)
            {
                if (UserFullName.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "UserFullName", 255);
                }
                if (UserFullName.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "UserFullName", 0);
                }
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
